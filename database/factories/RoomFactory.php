<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'name' => $faker->numerify('R ###'),
        'capacity' => $faker->numberBetween($min = 4, $max = 10),
        'states' => $faker->randomElement($array = array ('Furnished', 'Non Furnished')),
        'hasac' => $faker->randomElement($array = array('Yes', 'No'))

    ];
});
