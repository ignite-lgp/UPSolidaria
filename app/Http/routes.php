<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

/*
    Routes visible to common users.
*/

Route::get('/', function () {
  return view('index');
});

Route::get('/noticias', function () {
    return view('index');
});

/*
    Routes related to Auth
*/

Route::get('/auth/', 'Auth\AuthController@auth');

Route::post('/auth/register', 'Auth\AuthController@handleRegistration');

Route::get('/auth/confirm/token={token}&email={email}', 'Auth\AuthController@handleConfirmation');

Route::post('/auth/login', 'Auth\AuthController@handleLogin');

/* ----------------------------
 Recover password
*/

Route::get('auth/recover', function () {
    return view('auth/recover');
});

Route::get('auth/change_password', function(){
    return view('auth/change_password'); 
});

Route::post('/auth/recover_pass', 'Auth\AuthController@handleRecover');

Route::get('/auth/recover_pass/token={token}&email={email}', 'Auth\AuthController@showPassChangeForm');

Route::post('auth/confirm_password', 'Auth\AuthController@handlePassChange');

/* ----------------------------
/* Organizacoes */

Route::get('/organizacoes', 'Geral\OrgController@showOrgs');

/* -----------------------------------


/*
	General routes
*/

Route::get('/noticia/{organization}/{title}', 'Geral\NewsController@showNews');

Route::get('/organizacao/{name}', 'Geral\OrgController@showOrgPage');

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
