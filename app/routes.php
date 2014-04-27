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

Route::get('/index', array('uses' => 'TestsController@index'));
Route::get('/create', array('uses' => 'TestsController@create'));
Route::get('/view/{id}', array('uses' => 'TestsController@show'));
Route::get('/edit/{id}', array('uses' => 'TestsController@edit'));
Route::post('/update/{id}', array('uses' => 'TestsController@update'));
Route::get('/delete/{id}', array('uses' => 'TestsController@destroy'));
