<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Room::class, 10)->create()->each(function($room){
    		$room->person()->save(factory(App\Person::class)->make());
    	});

    }
}
