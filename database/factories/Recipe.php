<?php

use Faker\Generator as Faker;

$factory->define(App\Recipe::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(0, 9999),
        'name' => $faker->name,
        'description' => $faker->sentence()
    ];
});
