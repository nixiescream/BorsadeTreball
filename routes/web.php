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


//alumne
Route::get('/alumne/{id}', 'alumnesController@index')->middleware('isAlumne')->name('alumne');
Route::get('/alumne/editarAlumne/{id}','alumnesController@linkEditarAlumne')->middleware('isAlumne')->name('LinkEditarAlumne');
Route::post('/alumne/editarAlumne','alumnesController@editarAlumne')->middleware('isAlumne')->name('editarAlumne');
Route::get('/alumne/llistarOfertes/{id}','alumnesController@llistarOfertes')->middleware('isAlumne')->name('llistarOfertaAlumne');
Route::post('/alumne/aplicarOferta','alumnesController@aplicarOferta')->middleware('isAlumne')->name('aplicarOferta');

//empresa
Route::get('/empresa/{id}', 'empresesController@index')->middleware('isEmpresa')->name('empresa');
Route::get('/empresa/editarEmpresa/{id}','empresesController@linkEditarEmpresa')->middleware('isEmpresa')->name('LinkEditarEmpresa');
Route::post('/empresa/editarEmpresa','empresesController@editarEmpresa')->middleware('isEmpresa')->name('editarEmpresa');
Route::get('/empresa/crearOferta/{id}','empresesController@linkCrearOferta')->middleware('isEmpresa')->name('LinkCrearOferta');
Route::post('/empresa/crearOferta','empresesController@crearOferta')->middleware('isEmpresa')->name('crearOferta');
Route::get('/empresa/llistarOfertes/{id}','empresesController@llistarOfertes')->middleware('isEmpresa')->name('llistarOfertaEmpresa');

//validador
Route::get('/validador/{id}', 'validadorController@index')->middleware('isValidador')->name('validador');
Route::get('/validador/editarValidador/{id}','validadorController@linkEditarValidador')->middleware('isValidador')->name('LinkEditarValidador');
Route::post('/validador/editarValidador','validadorController@editarValidador')->middleware('isValidador')->name('editarValidador');
Route::get('/validador/validarAlumnes/{id}','validadorController@linkValidarAlumnes')->middleware('isValidador')->name('linkValidarAlumnes');
Route::post('/validador/validarAlumnes','validadorController@validarAlumnes')->middleware('isValidador')->name('validarAlumnes');
Route::get('/validador/validarEmpreses/{id}','validadorController@linkValidarEmpreses')->middleware('isValidador')->name('linkValidarEmpreses');
Route::post('/validador/validarEmpreses','validadorController@validarEmpreses')->middleware('isValidador')->name('validarEmpreses');
Route::get('/validador/validarOfertes/{id}','validadorController@linkValidarOfertes')->middleware('isValidador')->name('linkValidarOfertes');
Route::post('/validador/validarOfertes','validadorController@validarOfertes')->middleware('isValidador')->name('validarOfertes');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
