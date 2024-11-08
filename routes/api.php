<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', 'App\Http\Controllers\ApiController@hello');
Route::post('/horoscope', 'App\Http\Controllers\ApiController@checkHoroscope');

Route::get('/admin/horoscopes', 'App\Http\Controllers\ApiController@getAllHoroscopes');
Route::put('/admin/horoscope', 'App\Http\Controllers\ApiController@createHoroscope');
Route::get('/admin/horoscope/{id}', 'App\Http\Controllers\ApiController@getHoroscope');
Route::post('/admin/horoscope/{id}', 'App\Http\Controllers\ApiController@updateHoroscope');
Route::delete('/admin/horoscope/{id}', 'App\Http\Controllers\ApiController@deleteHoroscope');
