<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use View;
use DB;

class NewsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | News Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling news requests.
    |
    */


    /**
    *
    * Show a news 
    * @return view
    */
    protected function showNews($organization, $title){

        /*
            IMPORTANT : ALL ORGANIZATIONS NAME MUST BE UPPER CASE
        */
        $organization = strtoupper($organization);

        $information = DB::select('select news.* from news, organization where news.organization = organization.id and organization.name = ? and news.title = ?', array($organization, $title));

        return View('noticia')->with('noticia', $information[0]);
    }
}
