<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
 
Route::group(['middleware' => 'auth:api'], function(){
Route::get('details', 'API\UserController@details');
});

Route::get('indexapi', 'admin\HomeController@indexapi');
Route::post('indexapicreate', 'admin\HomeController@indexapicreate');
Route::get('indexapiedit/{id}', 'admin\HomeController@indexapiedit');
Route::post('indexapiupdate/{id}', 'admin\HomeController@indexapiupdate');
Route::post('indexapidelete/{id}', 'admin\HomeController@indexapidelete');
