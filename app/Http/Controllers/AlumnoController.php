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
       //$grados = []
       return view('alumnos.index',[
           'grados' => $grados
       ]);
   }
   //Alumnos de un grado determinado
   public function grado($id){
       return view('alumnos.grado');
   }
   
   public function ver($id){
        return view('alumnos.ver');
   }
   public function editar($id){
          return view('alumnos.editar');
   }
   public function eliminar($id){
         return "Eliminando: {$id}";
   }
   public function crear(){
        return view('alumnos.crear');
   }
}
