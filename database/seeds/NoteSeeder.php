<?php

use Illuminate\Database\Seeder;
use App\Note;
use Carbon\Carbon;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $note = new Note();
      $note->title = "creacion del siteweb de la empresa failes";
      $note->desc = "se esta trabajando falta el 50%";
      $note->date = Carbon::parse("03/01/2018");
      $note->project_id = 1;
      $note->save();
      
      $note = new Note();
      $note->title = "creacion del siteweb de la empresa failes";
      $note->desc = " tenemos el 80%";
      $note->date = Carbon::parse("05/01/2018");
      $note->project_id = 1;
      $note->save();
      
      $note = new Note();
      $note->title = "creacion del siteweb de la empresa failes";
      $note->desc = "terminamos el proyecto";
      $note->date = Carbon::parse("08/01/2018");
      $note->project_id = 1;
      $note->save();
      
      $note = new Note();
      $note->title = "creacion de 5 diseños graficos para leal";
      $note->desc = "necesito los patrones";
      $note->date = Carbon::parse("03/01/2018");
      $note->project_id = 2;
      $note->save();
      
      $note = new Note();
      $note->title = "creacion de 5 diseños graficos para leal";
      $note->desc = "patrones entregados";
      $note->date = Carbon::parse("04/01/2018");
      $note->project_id = 2;
      $note->save();
      
      $note = new Note();
      $note->title = "comienzo del comunity para tracke";
      $note->desc = "cual es el equipo de trabajo";
      $note->date = Carbon::parse("05/01/2018");
      $note->project_id = 2;
      $note->save();
    }
}
