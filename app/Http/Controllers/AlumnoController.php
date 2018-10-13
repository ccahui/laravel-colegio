<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grado;
class AlumnoController extends Controller
{
   public function index(){
       $grados = Grado::all();
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
