<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use UserController;
use App\User;
use View;
use DB;
use Session;

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
	
	protected function showNewsAdmin(){

		$email = Session::get('email');
        $user = User::whereRaw('email = ?', [$email])->first();

		//If user is not logged in
        if(is_null($user) || $user->admin == 0) {
            return View('errors/403');
        }
		else { //Else, platform admin --> get list for news management
		
			$news = DB::table('news')->orderBy('date', 'desc')->paginate(10);
			return view('/admin/ver_noticias')->with('noticias', $news);        
		}
    }
	
	protected function deleteNews($id){
	
		$email = Session::get('email');
        $user = User::whereRaw('email = ?', [$email])->first();

		//If user is not logged in
        if(is_null($user) || $user->admin == 0) {
            return View('errors/403');
        }
		else { //Else, platform admin --> get list for news management
			DB::table('news')->where('id', '=', $id)->delete();
			return redirect('/ver_noticias');
		}
	}
	
	protected function showForm(){
		$email = Session::get('email');
        $user = User::whereRaw('email = ?', [$email])->first();

		//If user is not logged in
        if(is_null($user) || $user->admin == 0) {
            return View('errors/403');
        }
		else { //Else, platform admin --> get list for news management
			return View('/criar_noticia');
		}
	}
	
	protected function createNews(){
	
	$email = Session::get('email');
        
		$user = User::whereRaw('email = ?', [$email])->first();

		//If user is not logged in
        if(is_null($user) || $user->admin == 0) {
            return View('errors/403');
        }
		else{
			//insert da imagem e da notícia
			return redirect('/ver_noticias');
		}
	
	}
}
