<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use UserController;
use App\User;
use View;
use DB;

class IndexController extends Controller
{
    //
        /**
    *
    * Show the index page
    * @return view
    */
    protected function showIndex(){
       
        /*
            IMPORTANT : ALL ORGANIZATIONS NAME MUST BE UPPER CASE
        */
        $news = DB::select('select * from news');
        $organizations = DB::select('select name from organization');

        //print_r($information);

        return View('index')->with('noticias', $news)->with('orgs',$organizations);
   	}
    
}
