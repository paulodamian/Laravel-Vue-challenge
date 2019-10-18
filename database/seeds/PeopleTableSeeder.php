<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Person::class, 300)->create()->each(function ($p) {
            $nAliases = random_int(0, 2); 
            if ($nAliases) {
                for ($i=0; $i < $nAliases; $i++) { 
                    $p->aliases()->save(factory(App\Alias::class)->make());
                }
            }
        });
    }
}
