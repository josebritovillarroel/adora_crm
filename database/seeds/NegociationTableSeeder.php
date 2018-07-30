<?php

use Illuminate\Database\Seeder;

class NegociationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\negociation::class, 10)->create();
    }
}
