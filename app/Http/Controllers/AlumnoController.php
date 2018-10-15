<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grado;
use App\Models\Alumno;

class AlumnoController extends Controller {

    public function index() {
        $grados = Grado::all();
        return view('alumnos.index', [
            'grados' => $grados
        ]);
    }

    //Alumnos de un grado determinado
    public function grado($id) {
        $grado = Grado::find($id);

        if ($grado == null) {
            return response()->view('errors.404', [], 404);
        }
        $alumnos = $grado->alumnos;
        return view('alumnos.grado', [
            'grado' => $grado,
            'alumnos' => $alumnos
        ]);
    }

    public function ver($id) {
        $alumno = Alumno::find($id);
        if ($alumno == null) {
            return response()->view('errors.404', [], 404);
        }

        return view('alumnos.ver', [
            'alumno' => $alumno
        ]);
    }

    public function editar($id) {

        $alumno = Alumno::find($id);
        if ($alumno == null) {
            return response()->view('errors.404', [], 404);
        }
        $grados = Grado::all();
        return view('alumnos.editar', [
            'alumno' => $alumno,
            'grados' => $grados
        ]);
    }

    public function eliminar($id) {
        return "Eliminando: {$id}";
    }

    public function crear() {
         $grados = Grado::all();
        return view('alumnos.crear',[
            'grados' => $grados
        ]);
    }
    public function crearPost(){
        $data = request()->all();
       
        Alumno::create([
            'nombre'=> $data['nombre'],
            'apellido'=> $data['apellido'],
            'grado_id' => $data['grado']
        ]);
        
        return redirect()->route('alumnos.grado',['id'=>$data['grado']]);
    }

}
