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
            $information = DB::select('select users.name, users.email, users.localidade, country.country, users.created_at, users.private_email, users.points, users.available from users, country where users.country = country.code and users.email = ?', array($session_email));

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

            return View('perfil')->with('profile',$information[0]);
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
        return View('/index');
    }
}