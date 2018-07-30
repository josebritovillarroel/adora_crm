<?php

use Illuminate\Database\Seeder;
use App\Reminder;
use Carbon\Carbon;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $reminder = new Reminder();
      $reminder->title = "llamar al sr. pepe";
      $reminder->desc = "se necesita saber los servicios que necesita";
      $reminder->date = Carbon::parse("4/01/2018");
      $reminder->priority = "urgente";
      $reminder->project_id = 1;
      $reminder->save();
      
      $reminder = new Reminder();
      $reminder->title = "finiquitar el negocio con zeo c.a";
      $reminder->desc = "establecer los precios para empezar";
      $reminder->date = Carbon::parse("05/01/2018");
      $reminder->priority = "media";
      $reminder->project_id = 1;
      $reminder->save();
      
      $reminder = new Reminder();
      $reminder->title = "cambios del siteweb de rolando.com";
      $reminder->desc = "preguntar que cambios se necestan en la pagina web";
      $reminder->date = Carbon::parse("01/01/2018");
      $reminder->priority = "normal";
      $reminder->project_id = 2;
      $reminder->save();
      
      $reminder = new Reminder();
      $reminder->title = "comprar la papeleria restante";
      $reminder->desc = "se necesitan comprar hojas blancas y lapiceros";
      $reminder->date = Carbon::parse("06/01/2018");
      $reminder->priority = "megaurgente";
      $reminder->project_id = 2;
      $reminder->save();
      
      $reminder = new Reminder();
      $reminder->title = "nuevos diseños para azulblue";
      $reminder->desc = "se necesita crear 5 nuevos diseños para el comunity de azul blue";
      $reminder->date = Carbon::parse("01/01/2018");
      $reminder->priority = "urgentw";
      $reminder->project_id = 3;
      $reminder->save();
    }
}
