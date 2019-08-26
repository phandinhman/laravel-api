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
Route::group(['prefix' => 'auth'], function() {
    Route::post('login', 'Api\AuthController@login');
    Route::post('signup', 'Api\AuthController@signup');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('articles', 'Api\ArticleController');

Route::fallback(function() {
    return response()->json(['message' => 'Page Not Found.'], 404);
});
