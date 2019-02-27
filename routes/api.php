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
Route::post('/v1/add-person','PersonapiController@store');
Route::get('/v1/persons','PersonapiController@index');
Route::get('/v1/person/{person}','PersonapiController@show');
Route::put('/v1/edit-person/{person}','PersonapiController@update');
Route::delete('/v1/person/{person}', 'PersonapiController@destroy');

Route::post('/v1/add-room','RoomapiController@store');
Route::get('/v1/rooms','RoomapiController@index');
Route::get('/v1/room/{room}','RoomapiController@show');
Route::put('/v1/edit-room/{room}','RoomapiController@update');
Route::delete('/v1/room/{room}', 'RoomapiController@destroy');
