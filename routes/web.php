<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/colegios');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){


	Route::resource('colegios', 'ColegioController');

	Route::group(['prefix' => '/colegio/{idColegio}'], function(){

		Route::resource('cursos', 'CursoController');
	
	});
	


});

Route::get('/logout', function(){

	Auth::logout();
	return redirect('/login');	
	
});



