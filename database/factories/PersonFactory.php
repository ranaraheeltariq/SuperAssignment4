<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone'	=> $faker->phoneNumber,
        'dob'	=> $faker->date(Y,M,D),
        'cnic'	=>	$faker->ssn,
        'city'	=>	$faker->city,
        'room_id' => function () {
        	return factory(App\Room::class)->create()->id;
        }

    ];
});
