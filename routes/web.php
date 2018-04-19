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



Route::get('/alumne', 'alumnesController@index')->middleware('isAlumne');
Route::get('/alumne/editar','alumnesController@linkEditarAlumne')->middleware('isAlumne');

Route::get('/empresa', 'empresesController@index')->middleware('isEmpresa');
Route::get('/empresa/editar','empresesController@linkEditarEmpresa')->middleware('isEmpresa');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
