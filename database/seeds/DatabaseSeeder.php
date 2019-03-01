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
    	//factory(App\Room::class, 50)->create();
    	factory(App\Person::class, 50)->create();

    }
}
