<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\User;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      factory(App\Project::class, 30)->create();
    }
}
