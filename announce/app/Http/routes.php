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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/announce/index', 'AnnounceController@index');
Route::get('/announce/show/{id}', 'AnnounceController@show');
Route::get('/announce/edit/{id}', 'AnnounceController@edit');
Route::put('/announce/edit/{id}', 'AnnounceController@update');
Route::post('/announce/create', 'AnnounceController@store');
Route::get('/announce/create', 'AnnounceController@create');
Route::delete('/announce/destroy/{id}', 'AnnounceController@destroy');