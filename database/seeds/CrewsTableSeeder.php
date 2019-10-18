<?php

use App\Crew;
use App\Movie;
use App\Person;
use App\Rol;
use Illuminate\Database\Seeder;

class CrewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = Person::all();
        $movies = Movie::all();
        $cast = Rol::find(1);
        $director = Rol::find(2);
        $producer = Rol::find(3);

        foreach ($movies as $m) {
            $nCast = random_int(1, 10);
            $nProducer = random_int(1, 3);
            $nDirector = random_int(1, 2);

            for ($i=0; $i < $nDirector; $i++) { 
                $this->createCrew($m, $people->random(), $director);
            }

            for ($i=0; $i < $nProducer; $i++) { 
                $this->createCrew($m, $people->random(), $producer);
            }

            for ($i=0; $i < $nCast; $i++) { 
                $this->createCrew($m, $people->random(), $cast);
            }
        }
    }

    private function createCrew($m, $p, $r) {
        $crew = new Crew();
        $crew->person()->associate($p);
        $crew->movie()->associate($m);
        $crew->rol()->associate($r);
        $crew->save();
    }
}
