<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;
class Grado extends Model
{
    protected $table = 'grados';
    
     protected $fillable = ['descripcion']; 
    public function alumnos(){
        
        return $this->hasMany(Alumno::class,'grado_id');
    }
}
