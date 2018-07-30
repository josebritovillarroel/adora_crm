<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Client::class, function (Faker $faker) {
    return [
        "name" 	=> $faker->name(),
        "email" => $faker->unique()->safeEmail,
        "tel" 	=> $faker->phoneNumber,
        "dir" 	=> "Porlamar",
        "bussiness" => $faker->jobTitle
    ];
});
