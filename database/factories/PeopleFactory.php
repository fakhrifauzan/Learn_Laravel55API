<?php

use Faker\Generator as Faker;

$factory->define(App\People::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => array_random([$faker->lastName, null]),
        'twitter' => array_random([$faker->unique()->userName, null]),
    ];
});
