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

Route::get('people', 'apiController@index');
Route::get('people/{id}', 'apiController@show');
Route::post('people', 'apiController@store');
Route::put('people/{id}', 'apiController@update');
Route::delete('people/{id}', 'apiController@delete');
Route::post('register', 'Auth\RegisterController@register');
