<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\negociation::class, function (Faker $faker) {
    return [
        "project_id" 	=> 12,
        "user_id" 		=> 2,
        "text" 			=> $faker->realText($maxNbChars = 30)
    ];
});
