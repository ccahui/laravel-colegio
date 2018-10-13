<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Grado;
class Alumno extends Model
{
    protected $table = 'alumnos';
    //
    protected $fillable = ['nombre','apellido','grado_id']; 
    
    public function grado(){
        return $this->belongsTo(Grado::class,'grado_id');
    }
}
