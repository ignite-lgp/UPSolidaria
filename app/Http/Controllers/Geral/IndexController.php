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
        $news = DB::select('select n.*, i.location from news n, image i where n.image=i.id order by id desc limit 10');
        $organizations = DB::select('select name from organization');

        //print_r($information);

        return View('index')->with('noticias', $news)->with('orgs',$organizations);
   	}
    
}
