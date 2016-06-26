<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/detail', array ('uses'=>'Detailmotor@get_all'));

Route::get('view/all', array('uses'=>'Detailmotor@get_all'));
Route::get('view/detail{id}', array('uses'=>'Detailmotor@get_all'));
Route::get('view/kategori/all', array('uses'=>'KategoriMotor@get_all'));
Route::get('view/kategori/{id}', array('uses'=>'KategoriMotor@get_all'));
Route::get('view/katalog/all', array('uses'=>'KatalogMotor@get_all'));
Route::get('view/katalog/{id}', array('uses'=>'KatalogMotor@get_all'));
Route::get('/menu', array('uses'=>'MenuUtama@get_all'));