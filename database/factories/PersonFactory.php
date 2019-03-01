<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone'	=> $faker->phoneNumber,
        'dob'	=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'cnic'	=>	$faker->ssn,
        'city'	=>	$faker->city,
        'institute'	=>	$faker->company,
        'rent'	=>	$faker->numberBetween($min = 4000, $max = 10000),
        'room_id' => function () {
        	return factory(App\Room::class)->create()->id;
        }

    ];
});
