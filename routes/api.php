<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('characters')->group(function () {
  Route::get('/', 'CharacterController@index');
  Route::get('/{slug}', 'CharacterController@show');
});

Route::prefix('chapters')->group(function () {
  Route::get('/', 'ChapterController@index');
  Route::get('/{slug}', 'ChapterController@show');
});

Route::prefix('actors')->group(function () {
  Route::get('/', 'ActorController@index');
  Route::get('/{slug}', 'ActorController@show');
});

Route::prefix('seo-configs')->group(function() {
  Route::get('/{slug}', 'SeoConfigController@show');
});
