<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Grado;
use App\Models\Alumno;

class ModuloAlumnosTest extends TestCase {

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample() {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function lista_de_grados() {

        Grado::create([
            'descripcion' => 'primer grado'
        ]);
        Grado::create([
            'descripcion' => 'segundo grado'
        ]);
        $this->get('/alumnos')
                ->assertStatus(200)
                ->assertSee('primer grado')
                ->assertSee('segundo grado');
    }

    /**
     * @test
     */
    public function lista_de_grados_vacia() {
        $this->get('/alumnos')
                ->assertStatus(200)
                ->assertSee('No hay Grados Registrados');
    }

    /**
     * @test
     */
    public function lista_de_alumno_del_grado_404() {
        //Recordad que la base de datos esta vacia, no existe el GRADO 1
        $this->get('/alumnos/grado-1')
                ->assertStatus(404)
                ->assertSee('Pagina no encontrada');
    }

    /**
     * @test
     */
    public function lista_de_alumnos_del_grado() {
        $grado = Grado::create([
                    'descripcion' => 'primer grado'
        ]);

        $alumno = factory(Alumno::class)->create([
            'nombre' => 'Kristian J',
            'grado_id' => $grado->id
        ]);

        $this->get('/alumnos/grado-' . $grado->id)
                ->assertStatus(200)
                ->assertSee('primer grado')
                ->assertSee('Kristian J');
    }

    /**
     * @test
     */
    public function lista_de_alumnos_del_grado_vacio() {
        $grado = Grado::create([
                    'descripcion' => 'primer grado'
        ]);
        $this->get('/alumnos/grado-' . $grado->id)
                ->assertStatus(200)
                ->assertSee('primer grado')
                ->assertSee('No hay alumnos registrados');
    }

    /**
     * @test
     */
    public function ver_un_alumno() {
        $grado = Grado::create([
                    'descripcion' => 'primer grado'
        ]);

        $alumno = factory(Alumno::class)->create([
            'nombre' => 'Kristian J',
            'grado_id' => $grado->id
        ]);
        $this->get('/alumnos/ver-' . $alumno->id)
                ->assertStatus(200)
                ->assertSee('Kristian J')
                ->assertSee('primer grado');
    }

    /**
     * @test
     */
    public function ver_un_alumno_404() {
        //Recordad que la base de datos esta vacia, no existe el GRADO 1
        $this->get('/alumnos/ver-1')
                ->assertStatus(404)
                ->assertSee('Pagina no encontrada');
    }

    /**
     * @test
     */
    public function editar_un_alumno() {
        $grado = Grado::create([
                    'descripcion' => 'primer grado'
        ]);

        $alumno = factory(Alumno::class)->create([
            'nombre' => 'Kristian J',
            'grado_id' => $grado->id
        ]);

        $this->get('/alumnos/editar-' . $alumno->id)
                ->assertStatus(200)
                ->assertSee('Kristian J')
                ->assertSee('primer grado');
    }

    /**
     * @test
     */
    public function editar_un_alumno_404() {
        //Recordad que la base de datos esta vacia, no existe el GRADO 1
        $this->get('/alumnos/editar-1')
                ->assertStatus(404)
                ->assertSee('Pagina no encontrada');
    }

    /**
     * @test
     */
    public function eliminar_un_alumno() {
        $this->get('/alumnos/eliminar-5')
                ->assertSee('5')
                ->assertStatus(200);
    }

    /**
     * @test
     */
    public function crear_un_alumno_almacenando_en_la_bd() {
        $grado = Grado::create([
                    'descripcion' => 'primer grado'
        ]);

        $this->post('/alumnos/crear', [
            'nombre' => 'Kristian',
            'apellido' => 'Ccahui',
            'grado' => $grado->id
        ])->assertRedirect(route('alumnos.grado', ['id' => $grado->id]));

        $this->assertDatabaseHas('alumnos', [
            'nombre' => 'Kristian',
            'apellido' => 'Ccahui',
            'grado_id' => $grado->id
        ]);
    }

}
