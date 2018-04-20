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
    return view('site.home');
});



Route::get('/home', 'alumnesController@index')->middleware('isAlumne');
Route::get('/home/editarAlumne/{id}','alumnesController@linkEditarAlumne')->middleware('isAlumne');

Route::get('/home', 'empresesController@index')->middleware('isEmpresa');
Route::get('/editarEmpresa','empresesController@linkEditarEmpresa')->middleware('isEmpresa');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
