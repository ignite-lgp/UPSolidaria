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
    protected function showNews($title){

        /*
            IMPORTANT : ALL ORGANIZATIONS NAME MUST BE UPPER CASE
        */
        $information = DB::select('select news.* from news where news.title = ?', array($title));

        //print_r($information);

        return View('noticia')->with('noticia', $information[0]);
    }

    protected function showAllNews(){

        /*
            IMPORTANT : ALL ORGANIZATIONS NAME MUST BE UPPER CASE
        */
        
        //$organization = strtoupper($organization);

        $news = DB::select('select * from news');

        //print_r($news);

        return View('lista_noticias')->with('noticias', $news);
    }
}
