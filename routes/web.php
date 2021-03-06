<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/nombres','NombreController');
Route::get('/nombres/{nombre}', 'NombreController@show');
Route::put('/nombres/{nombre}', 'NombreController@update');
Route::delete('/nombres/{nombre}', 'NombreController@destroy');



//ESTUDIANTES
Route::get('/estudiantes', 'EstudianteController@index');
Route::post('/registrar', 'EstudianteController@store');
Route::put('/actualizar/{id}', 'EstudianteController@update');
Route::delete('/eliminar/{id}', 'EstudianteController@delete');

