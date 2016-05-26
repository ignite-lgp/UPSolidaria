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
            $information = DB::select('select users.name, users.email, users.localidade, country.country, users.created_at, users.private_email from users, country where users.country = country.code and users.email = ?', array($session_email));

            if ($information[0]->private_email){
                $information[0]->email = 'private';
            }

            // extract (year from users.created_at) seems to expload this function
            // Let the hack begin
            $information[0]->created_at = substr($information[0]->created_at,0,4);

            return View('perfil')->with('profile',$information[0]);
        }
    }
}