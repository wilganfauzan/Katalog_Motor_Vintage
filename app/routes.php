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

Route::get('/menu', array('uses'=>'MenuUtama@get_all'));
Route::get('/view/detail', array ('uses'=>'Detailmotor@get_all'));
Route::get('/view/kategori', array('uses'=>'KategoriMotor@get_all'));
Route::get('/view/katalog', array('uses'=>'KatalogMotor@get_all'));
