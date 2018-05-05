<?php

use Faker\Generator as Faker;

use App\Ingredient;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(0, 9999),
        'name' => $faker->name,
        'description' => $faker->sentence,
        'price' => $faker->numberBetween(0, 100)
    ];
});
