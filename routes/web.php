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

Route::get('/','FellowsController@index');
Route::post('/','FellowsController@store');
Route::get('/attendance','AttendController@index');
Route::post('/attendance','AttendController@store');
Route::get('/sheet','AttendController@sheet');
Route::get('/allfellows','AttendController@allfellows');
Route::get('/signout/{id}','AttendController@signout')->name('signout');
Route::get('/allfellow/{id}','AttendController@edit')->name('fellows.edit');
Route::get('/fellow/{id}','AttendController@destroy')->name('fellow.destroy');
Route::post('/fellow/{id}','AttendController@update');