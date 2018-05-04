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
    $results=\App\Projects::with(['Companies','Tasks'])->get();
	var_dump($results);
});
Route::get('company','Companies@showList');
Route::get('showCompany','Companies@showCompany');