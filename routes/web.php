<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/rooms','RoomController@index')->name('rooms.index');
Route::get('/add-room', 'RoomController@create')->name('add-room.create');
Route::post('/room','RoomController@store')->name('room.store');
Route::get('/edit-room/{room}', 'RoomController@edit')->name('edit-room.edit');
Route::put('/edit-room/{room}', 'RoomController@update')->name('edit-room.update');
Route::delete('room/{room}', 'RoomController@destroy')->name('room.destroy');

Route::get('/persons','PersonController@index')->name('persons.index');
Route::get('/add-person','PersonController@create')->name('add-person.create');
Route::post('/add-person', 'PersonController@store')->name('add-persons.store');
Route::get('/edit-person/{person}', 'PersonController@edit')->name('edit-person.edit');
Route::put('/edit-person/{person}', 'PersonController@update')->name('edit-person.update');
Route::delete('person/{person}', 'PersonController@destroy')->name('person.destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
