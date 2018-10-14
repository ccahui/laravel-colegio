<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Grado;
use App\Models\Alumno;
class ModuloAlumnosTest extends TestCase
{
    
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    /**
     * @test
     */
    public function lista_de_grados(){
        
        Grado::create([
            'descripcion'=>'primer grado'
        ]);
        Grado::create([
            'descripcion'=>'segundo grado'
        ]);
        $this -> get('/alumnos')
                ->assertStatus(200)
                ->assertSee('primer grado')
                ->assertSee('segundo grado');
    }
    /**
     * @test
     */
    public function lista_de_grados_vacia(){
        $this->get('/alumnos')
                ->assertStatus(200)
                ->assertSee('No hay Grados Registrados');
    }
    /**
     * @test
     */
    public function lista_de_alumnos_del_grado(){
        $grado = Grado::create([
            'descripcion'=>'primer grado'
        ]);
        
        $alumno = factory(Alumno::class)->create([
            'nombre'=>'Kristian J',
            'grado_id'=>$grado->id
        ]);
        
        $this -> get('/alumnos/grado-'.$grado->id)
                ->assertStatus(200)
                ->assertSee('primer grado')
                ->assertSee('Kristian J');
    }
    /**
     * @test
     */
     public function lista_de_alumnos_del_grado_vacio(){
         $grado = Grado::create([
             'descripcion'=>'primer grado'
         ]);
         $this -> get('/alumnos/grado-'.$grado->id)
                ->assertStatus(200)
                ->assertSee('primer grado')
                ->assertSee('No hay alumnos registrados');
     }
    /**
     * @test
     */
    public function editar_un_alumno(){
        $this -> get('/alumnos/editar-5')
                ->assertSee('5')
                ->assertStatus(200);
    }
    /**
     * @test
     */
    public function ver_un_alumno(){
        $this -> get('/alumnos/ver-5')
                ->assertSee('5')
                ->assertStatus(200);
    }
    /**
     * @test
     */
    public function eliminar_un_alumno(){
        $this -> get('/alumnos/eliminar-5')
                ->assertSee('5')
                ->assertStatus(200);
    }
    /**
     * @test
     */
    public function crear_un_alumno(){
        $this -> get('/alumnos/crear')
                ->assertStatus(200);
    }
    
}
