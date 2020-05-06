<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Tweet::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'text' => substr($faker->sentence(2), 0, -1),
        'image' => $faker->paragraph,
    ];
});