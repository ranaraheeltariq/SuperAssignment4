<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'name' => $faker->name;
        'capacity' => $faker->randomDigit,
        'states' => $faker->randomElement($array = array ('Furnished', 'NonFurnished')),
        'hasac' => $faker->randomElement($array = array('yes', 'no')),

    ];
});
