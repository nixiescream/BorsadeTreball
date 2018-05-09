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



Route::get('/alumne/{id}', 'alumnesController@index')->middleware('isAlumne')->name('alumne');
Route::get('/alumne/editarAlumne/{id}','alumnesController@linkEditarAlumne')->middleware('isAlumne')->name('LinkEditarAlumne');
Route::post('/alumne/editarAlumne','alumnesController@editarAlumne')->middleware('isAlumne')->name('editarAlumne');

Route::get('/empresa/{id}', 'empresesController@index')->middleware('isEmpresa')->name('empresa');
Route::get('/empresa/editarEmpresa/{id}','empresesController@linkEditarEmpresa')->middleware('isEmpresa')->name('LinkEditarEmpresa');
Route::post('/empresa/editarEmpresa','empresesController@editarEmpresa')->middleware('isEmpresa')->name('editarEmpresa');
Route::get('/empresa/crearOferta/{id}','empresesController@linkCrearOferta')->middleware('isEmpresa')->name('LinkCrearOferta');
Route::post('/empresa/crearOferta','empresesController@crearOferta')->middleware('isEmpresa')->name('crearOferta');
Route::get('/empresa/llistarOfertes/{id}','empresesController@llistarOfertes')->middleware('isEmpresa')->name('llistarOfertaEmpresa');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
