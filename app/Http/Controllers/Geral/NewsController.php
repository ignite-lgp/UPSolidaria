<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use UserController;
use App\User;
use View;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

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
	
	protected function createNews(Request $data){
	
		$email = Session::get('email');
		$user = User::whereRaw('email = ?', [$email])->first();

		//If user is not logged in
        if(is_null($user) || $user->admin == 0) {
            return View('errors/403');
        }
		else{
			// Just need the form data
			$newsInfo = $data->all();
			
			//Proccess image upload
			$file = array('image' => Input::file('image'));
			// setting up rules
			$rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
			// doing the validation, passing post data, rules and the messages
			$validator = Validator::make($file, $rules);
			if ($validator->fails()) {
				// send back to the page with the input data and errors
				return redirect('/ver_noticias')->withInput()->withErrors($validator);
			}
			else {
				// checking file is valid.
				if (Input::file('image')->isValid()) {
					$destinationPath = 'newsimages'; // upload path
					$extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
					$fileName = rand(11111,99999).'.'.$extension; // renaming image
					Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                    //sending back with message
					Session::flash('success', 'Notícia criada com sucesso');
				}
				else {
					// sending back with error message.
					Session::flash('error', 'uploaded file is not valid');
					return redirect('/ver_noticias');
				}
			
			DB::transaction(function() use ($newsInfo, $destinationPath, $fileName)
			{
				$lastInsertId = DB::table('image')->insertGetId(array(
												'alt' => $newsInfo['title'], 
												'height' => 90, 
												'width' => 90, 
												'location' => $destinationPath . '/' . $fileName, 
												'size' => 900));	
				DB::table('news')->insert(array(
					'title' => $newsInfo['title'],
					'description' => $newsInfo['description'],
					'image' => (int) $lastInsertId
				));
			});
			
			//voltando à lista das notícias
			return redirect('/ver_noticias');
		}
	}
}
}
?>