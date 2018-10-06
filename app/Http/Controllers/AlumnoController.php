<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
   public function index(){
       $grados = [
           'Primer Grado',
           'Segundo Grado',
           'Tercer Grado',
           'Cuarto Grado',
           'Quinto Grado',
           'Sexto Grado'
       ];   
       
       return view('index',[
           'grados' => $grados
       ]);
   }
   //Alumnos de un grado determinado
   public function grado($id){
       return "alumnos-grado.html: {$id}";
   }
   
   public function ver($id){
        return "alumnos-ver.html: {$id}";
   }
   public function editar($id){
          return "alumnos-editar.html: {$id}";
   }
   public function eliminar($id){
         return "Eliminando: {$id}";
   }
   public function crear(){
        return "alumnos-crear.html";
   }
}
