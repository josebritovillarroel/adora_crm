<?php

use Illuminate\Database\Seeder;
use App\Role;
    
class RolesTableSeeder extends Seeder
{
    public function run(){
        $role = new Role();
        $role->title = "Admin";
        $role->description = "Rol de usuario con todos los privilegios";
        $role->save();
        
        $role = new Role();
        $role->title = "Empleado";
        $role->description = "Rol de usuario de segundo nivel privilegios limitados a proyectos relacionados";
        $role->save();
    }
}