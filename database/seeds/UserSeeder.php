<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adminRole = Role::find(1);
      $empRole = Role::find(2);
        
      $user = new User();
      
      $user->name = 'David';
      $user->email = 'davidguilarte7@gmail.com';
      $user->password = bcrypt('123456');
      $user->cargo = 'Desarrollador';
      $user->client_id = 1;
      $user->save();
      $user->roles()->attach($empRole);
      
      $user = new User();
      $user->name = 'José';
      $user->email = 'josebritovillarroel@gmail.com';
      $user->password = bcrypt('123456');
      $user->cargo = 'Desarrollador';
      $user->client_id = 1;
      $user->save();
      $user->roles()->attach($adminRole);
      
      $user = new User();
      $user->name = 'Daniela';
      $user->email = 'daniela@gmail.com';
      $user->password = bcrypt('123456');
      $user->cargo = 'Diseñador Gráfico';
      $user->client_id = 1;
      $user->save();
      $user->roles()->attach($empRole);

      $user = new User();
      $user->name = 'Balach';
      $user->email = 'balach@gmail.com';
      $user->password = bcrypt('123456');
      $user->cargo = "ninguno";
      $user->client_id = 3;
      $user->save();
      $user->roles()->attach($empRole);
      
    }
}
