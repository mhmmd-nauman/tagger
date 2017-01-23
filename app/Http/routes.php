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

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/key_settings','KeySettingController@index');
Route::post('/add_key_settings','KeySettingController@add_key_settings');
Route::get('/key_settings_in_json','KeySettingController@key_settings_in_json');
Route::post('/remove_key_settings','KeySettingController@remove_key_settings');