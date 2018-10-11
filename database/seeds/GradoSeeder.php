<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        
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
        ]);
    }
}