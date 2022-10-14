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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data-diri', 'App\Http\Controllers\DataDiriController@index');
Route::post('data-diri', 'App\Http\Controllers\DataDiriController@create');
Route::put('/data-diri/{id}', 'App\Http\Controllers\DataDiriController@update');
Route::delete('/data-diri/{id}', 'App\Http\Controllers\DataDiriController@delete');
