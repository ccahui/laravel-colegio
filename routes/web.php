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
Route::get('/alumnos',function(){
    return "alumnos.html";
});
Route::get('/alumnos/grado-{id}',function($id){
    return "alumnos-grado.html: {$id}";
}) -> where('id','[1-6]');

Route::get('/alumnos/ver-{id}',function($id){
    return "alumnos-ver.html: {$id}";
}) -> where('id','[0-9]+');

Route::get('/alumnos/editar-{id}',function($id){
    return "alumnos-editar.html: {$id}";
}) -> where('id','[0-9]+');

Route::get('/alumnos/eliminar-{id}',function($id){
    return "Eliminando: {$id}";
}) -> where('id','[0-9]+');

Route::get('/alumnos/crear',function(){
    return "alumnos-crear.html";
});

Route::get('/iniciar-sesion',function(){
   return "iniciar-session.html"; 
});