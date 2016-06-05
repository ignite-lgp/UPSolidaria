<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use View;
use DB;
use Session;


class ActivitiesController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Ativities Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling ativities requests.
    |
    */


    /**
    *
    * Show the ativities page 
    * @return view
    */
    protected function showActivities(){
        $session_email = Session::get('email', 'default');

        //User not logged in. It shows the default page
        if ($session_email == 'default'){
            return View('atividades');
        } else {
        //User logged in shows the list of activities 
        // the user is responsible for and the ones
        // from the organization he is in plus the public activities.
        return redirect('/');
      }
    }

}
