<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModuloAlumnosTest extends TestCase
{
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
        $this -> get('/alumnos')
                ->assertStatus(200);
    }
    /**
     * @test
     */
    public function lista_de_alumnos_del_grado(){
        $this -> get('/alumnos/grado-5')
                ->assertStatus(200);
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
