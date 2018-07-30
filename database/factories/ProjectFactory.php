<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Project::class, function (Faker $faker) {
    return [
        "title" 	=> $faker->catchPhrase,
        "desc" 		=> $faker->text($maxNbChars = 200),
        "type" 		=> $faker->jobTitle,
        "internal" 	=> $faker->boolean($chanceOfGettingTrue = 50),
        "start" 	=> $faker->dateTime($max = 'now', $timezone = null),
        "end" 		=> $faker->dateTime($max = 'now', $timezone = null),
        "client_id"	=> $faker->numberBetween(1,30),
        "status" 	=> "iniciado"
    ];
});
