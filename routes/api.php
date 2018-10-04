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
Route::get('/', function (Request $request) {
    echo "Timer2U - api";
});
Route::post('/teste', function (Request $request) {
    echo "teste";
});
Route::get('/logs', 'TimerController@index');
Route::post('/logs', 'TimerController@store');
Route::delete('logs/{id}', 'TimerController@delete');



