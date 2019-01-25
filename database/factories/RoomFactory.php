<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'name' => $faker->name;
        'capecity' => $faker->randomDigit;
        'states' => $faker->random('Furnished','NonFurnished');


    ];
});
