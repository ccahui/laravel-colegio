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
    return view('welcome');
});
Route::get('/alumnos','AlumnoController@index')
        ->name('alumnos.index');

Route::get('/alumnos/grado-{id}','AlumnoController@grado')
        -> where('id','[1-6]')
        ->name('alumnos.grado');

Route::get('/alumnos/ver-{id}','AlumnoController@ver') 
        -> where('id','[0-9]+')
        ->name('alumnos.ver');

Route::get('/alumnos/editar-{id}','AlumnoController@editar') -> 
        where('id','[0-9]+')
        ->name('alumnos.editar');

Route::get('/alumnos/eliminar-{id}','AlumnoController@eliminar') 
        -> where('id','[0-9]+')
        ->name('alumnos.eliminar');

Route::get('/alumnos/crear','AlumnoController@crear')
        ->name('alumnos.crear');

Route::post('/alumnos/crear','AlumnoController@crearPost');