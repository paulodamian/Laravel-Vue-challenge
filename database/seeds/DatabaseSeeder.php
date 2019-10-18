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
        $this->call(RolTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(CrewsTableSeeder::class);
    }
}
