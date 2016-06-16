<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use View;
use DB;
use Session;
use Response;


class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | User Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling user requests.
    |
    */


    /**
    *
    * Show a profile page 
    * @return view
    */

    protected function showProfile(Request $request){
        
        $session_email = Session::get('email', 'default');

        if ($session_email == ''){
            return View('errors.403');
        } else {

            // Retrieve the general information of certain user
            $information = DB::select('select users.id, users.name, users.email, users.localidade, country.country, users.created_at, users.private_email, users.points, users.available from users, country where users.country = country.code and users.email = ?', array($session_email));

            // Get all organizations in which user is in
            $organizations = DB::select('select organization.name, user_organization.reg_date, user_organization.leave_date, image.location as image from user_organization, organization, image where user_organization.organization = organization.id and image.id = organization.image and volunteer = ?', array($information[0]->id));

            // Get all medals and trophies user has.
            $medals = DB::select('select medal.name, medal.description, count(*) as medalhas from medal, medalattribution where medalattribution.medal = medal.id and medalattribution.volunteer = ? group by medal.description, medal.name;', array($information[0]->id));

            $trophies = DB::select('select trophy.name, trophy.description, count(*) as trofeus from trophy, trophyvolunteer where trophyvolunteer.trophy = trophy.id and trophyvolunteer.volunteer = ? group by trophy.description, trophy.name;', array($information[0]->id));


            // Get activities the user is or was in
            $activities = DB::select('select activity.name, activity.init_date, activity.end_date, organization.name as org from volunteeractivity, activity, groups, organization where activity.id = volunteeractivity.activity and groups.id = activity.group and organization.id = groups.organization and volunteer = ?',array($information[0]->id) );



            for ($i=0; $i < count($organizations); $i++) { 
                $organizations[$i]->reg_date = substr($organizations[$i]->reg_date,0,4);

                if ($organizations[$i]->leave_date != NULL){
                    $organizations[$i]->leave_date = substr($organizations[$i]->leave_date,0,4);
                }
            }

            // Organize the activities
            // organized_activities = [ [Still active], [Not active] ]
            $organized_activities = array( array(), array());

            for ($i=0; $i < count($activities); $i++) { 
                $time = time();

                $ano = substr($activities[$i]->end_date,0,4);

                $mes = date('F', mktime(0, 0, 0, substr($activities[$i]->end_date,5,2), 10));
                $activities[$i]->init_date = strtotime($activities[$i]->init_date);
                $activities[$i]->end_date = strtotime($activities[$i]->end_date);

                if ($time >= $activities[$i]->init_date && $time <= $activities[$i]->end_date){
                    $activities[$i]->completedPercentage = round (100 * ($time - $activities[$i]->init_date) / ($activities[$i]->end_date - $activities[$i]->init_date) );
                    array_push($organized_activities[0], $activities[$i]);
                } else {
                    $activities[$i]->ano = $ano;
                    $activities[$i]->mes = $mes;
                    array_push($organized_activities[1], $activities[$i]);
                }
            }

            // Make sure that email stays private if user wants.
            if ($information[0]->private_email){
                $information[0]->email = 'private';
            }

            // extract (year from users.created_at) seems to expload the sql function
            // Let the hack begin
            $information[0]->created_at = substr($information[0]->created_at,0,4);

            // Convert points to levels
            $levelInformation = $this->calculatePoints($information[0]->points);


            // Add points to response so we can show them on view
            $information[0]->current_level = $levelInformation[0];
            $information[0]->next_lower_limit = $levelInformation[1];
            $information[0]->current_points = $levelInformation[2];

            return View('perfil')->with('profile',$information[0])->with('organizations', $organizations)
                ->with('medals', $medals)
                ->with('trofeus', $trophies)
                ->with('actividades', $organized_activities);
        }
    }



    /**
    *
    *   Conversion of points to lvl's
    *   @param integer representing the current total points user has.
    *   @return array where 1st index = current lvl, 2nd index = next level lower limit and 3rd index = current points
    */
    private function calculatePoints($currentPoints){

        $_levelInformation = [];
        $_xpAccummulated = 0;

        array_push($_levelInformation, floor(0.4 * sqrt($currentPoints)));

        for ($i=0; $i < $_levelInformation[0]; $i++) { 
            $_xpAccummulated += pow( ($i+1) / 0.4,2) -pow($i / 0.4,2);
        }

        array_push($_levelInformation, floor(pow(($i+1)/0.4,2)));
        array_push($_levelInformation, floor($currentPoints - $_xpAccummulated));

        return $_levelInformation;
    }


    /*
    * Test route to logout - 'http... /logout'
    */
    protected function destroySession(){

        Session::flush();
        print_r(Session::all());
        return redirect('/');
    }


    /*
    * To use in an autocomplete search box
    */

    //->orWhere('email', 'LIKE', '%'.$term.'%')
    public function autocomplete(){
            $term = Input::get('term');
        
            $results = array();
            
            $queries = DB::table('users')
                ->where('name', 'LIKE', '%'.$term.'%')
                ->take(5)->get();
        
        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->name];
        }
    return Response::json($results);
    }
	
	public function showVolunteersAdmin(){
	
		$email = Session::get('email');
        $user = User::whereRaw('email = ?', [$email])->first();

		//If user is not logged in
        if(is_null($user) || $user->admin == 0) {
            return View('errors/403');
        }
		else { //Else, platform admin --> get list for volunteers management where users.organization is null and users.admin = 0
		
			$information = DB::table('users')->where('admin', '=', 0)->whereNull('organization')->paginate(10);
			return View('admin/ver_registos')->with('voluntarios', $information);
        }
	}
	
	protected function deleteVolunteer($id){
	
		$email = Session::get('email');
        $user = User::whereRaw('email = ?', [$email])->first();

		//If user is not logged in
        if(is_null($user) || $user->admin == 0) {
            return View('errors/403');
        }
		else { //Else, platform admin --> get list for news management
			DB::table('users')->where('id', '=', $id)->delete();
			return redirect('/gerir_voluntarios');
		}
		
	}

   


}
