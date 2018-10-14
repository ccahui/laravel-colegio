<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grado;
use App\Models\Alumno;
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
       $grado = Grado::find($id);
       $alumnos = $grado->alumnos;
       
       return view('alumnos.grado',[
           'grado'=>$grado,
           'alumnos'=>$alumnos
       ]);
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
