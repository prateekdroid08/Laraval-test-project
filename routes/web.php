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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'DefaultController@index');
Route::get('form', 'DefaultController@getForm');
Route::post('form/submit', 'DefaultController@postForm');
Route::get('delete/{id}', 'DefaultController@getdelete');
Route::get('edit/{id}', 'DefaultController@getedit');
