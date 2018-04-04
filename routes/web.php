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


Route::get('ticket','ClientController@index');
Route::get('ticket/create','ClientController@create');
Route::post('ticket','ClientController@store');
Route::get('ticket/{id}/profile','ClientController@edit');
Route::put('ticket/{id}','ClientController@update');
Route::delete('ticket/{id?}','ClientController@destroy');
Route::get('ticket/delete','ClientController@deelete');
Route::get('ticket/Codebarre','ClientController@Codebarre');
Route::post('ticket/search','ClientController@search');
//Route::resource('ticket','ClientController');
Route::get('/confirm/{id}/{token}','Auth\RegisterController@confirm');

Route::get('/home', 'HomeController@index')->name('home');
