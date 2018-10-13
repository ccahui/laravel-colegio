<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Grado;
class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        Grado::create([
            'descripcion'=>'Primer Grado'
        ]);
        Grado::create([
            'descripcion'=>'Segundo Grado'
        ]);
        Grado::create([
            'descripcion'=>'Tercer Grado'
        ]);
        Grado::create([
            'descripcion'=>'Cuarto Grado'
        ]);
        Grado::create([
            'descripcion'=>'Quinto Grado'
        ]);
        
        /*
        DB::table('grados')->insert([
            'descripcion'=>'Primer Grado'
        ]);
        DB::table('grados')->insert([
            'descripcion'=>'Segundo Grado'
        ]);
        DB::table('grados')->insert([
            'descripcion'=>'Tercer Grado'
        ]);
        DB::table('grados')->insert([
            'descripcion'=>'Cuarto Grado'
        ]);
        DB::table('grados')->insert([
            'descripcion'=>'Quinto Grado'
        ]);*/
    }
}