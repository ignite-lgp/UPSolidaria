<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use DB;
use Session;

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

            for ($i=0; $i < count($organizations); $i++) { 
                $organizations[$i]->reg_date = substr($organizations[$i]->reg_date,0,4);

                if ($organizations[$i]->leave_date != NULL){
                    $organizations[$i]->leave_date = substr($organizations[$i]->leave_date,0,4);
                }
            }

            // Make sure that email stays private if user wants.
            if ($information[0]->private_email){
                $information[0]->email = 'private';
            }

            // extract (year from users.created_at) seems to expload this function
            // Let the hack begin
            $information[0]->created_at = substr($information[0]->created_at,0,4);

            // Convert points to levels
            $levelInformation = $this->calculatePoints($information[0]->points);
            
            // Add points to response so we can show them on view
            $information[0]->current_level = $levelInformation[0];
            $information[0]->next_lower_limit = $levelInformation[1];
            $information[0]->current_points = $levelInformation[2];

            return View('perfil')->with('profile',$information[0])->with('organizations', $organizations);
        }
    }



    /**
    *
    *   Conversion of points to lvl's
    *   @param integer representing the current total points user has.
    *   @return array where 1st index = current lvl, 2nd index = next level lower limit and 3rd index = current points
    */
    private function calculatePoints(int $currentPoints){

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
}