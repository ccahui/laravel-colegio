<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;
use App\Models\Grado;
class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *'
     * @return void
     */
    public function run()
    {
        
        //$grado = DB::select('SELECT id FROM grados WHERE descripcion=?',['Primer Grado']);
        //dd($grado[0]->id);
      $gradoId = Grado::where('descripcion','Primer Grado')->first()->value('id');
       
      // dd($grado->id);
       
      /* DB::table('alumnos')->insert([
            'nombre'=>'Kristian',
            'apellido'=>'Ccahui',
            'grado_id'=>$grado->id
        ]);*/
      Alumno::create([
            'nombre'=>'Kristian',
            'apellido'=>'Ccahui', 
            'grado_id'=>$gradoId
        ]);
      
      for( $i=0;$i<60;$i++){
      factory(Alumno::class)->create([
          'grado_id'=>rand(1,5)
      ]);
    }}
}
