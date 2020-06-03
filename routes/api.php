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

Route::resource('users', 'UserAPIController');
Route::get('mainCategories', 'CategoryAPIController@MainCategories');
Route::resource('categories', 'CategoryAPIController');




























Route::group(['prefix' => 'admin'], function () {
    Route::resource('countries', 'CountryAPIController');
});
