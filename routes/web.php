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
Route::get('/alumnos','AlumnoController@index');

Route::get('/alumnos/grado-{id}','AlumnoController@grado')
        -> where('id','[1-6]');

Route::get('/alumnos/ver-{id}','AlumnoController@ver') -> where('id','[0-9]+');

Route::get('/alumnos/editar-{id}','AlumnoController@editar') -> where('id','[0-9]+');

Route::get('/alumnos/eliminar-{id}','AlumnoController@eliminar') -> where('id','[0-9]+');

Route::get('/alumnos/crear','AlumnoController@crear');

Route::get('/iniciar-sesion',function(){
   return "iniciar-session.html"; 
});