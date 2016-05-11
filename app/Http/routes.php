<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
    Routes visible to common users.
*/

Route::get('/', function () {
  return view('index');
});

Route::get('/noticias', function () {
    return view('noticia');
});

/*
    Routes related to Auth
*/

Route::get('/auth/register', 'Auth\AuthController@showRegistrationForm');

Route::post('/auth/register', 'Auth\AuthController@handleRegistration');

Route::get('/auth/confirm/token={token}&email={email}', 'Auth\AuthController@handleConfirmation');




/*
	General routes
*/

Route::get('/noticia', function(){
    return view('noticia'); 
});

Route::get('/organizacao', function () {
    return view('organizacao');
});

Route::get('/organizacoes', function () {
    return view('organizacoes');
});

Route::get('/perfil', function(){
    return view('perfil'); 
});

Route::get('/quemsomos', function(){
    return view('quemsomos'); 
});

Route::get('/template', function(){
    return view('template'); 
});