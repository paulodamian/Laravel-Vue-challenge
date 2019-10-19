<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crew;
use App\Http\Resources\CrewResource;
use App\Movie;
use App\Person;
use App\Rol;

class CrewController extends Controller
{
    public function store(Request $request) {
        $vd = $request->validate([
            'movieId' => 'required|numeric',
            'personId' => 'required|numeric',
            'rolId' => 'required|numeric'
        ]);

        $movie = Movie::findOrFail($vd['movieId']);
        $person = Person::findOrFail($vd['personId']);
        $rol = Rol::findOrFail($vd['rolId']);

        $crew = new Crew();
        $crew->person()->associate($person);
        $crew->movie()->associate($movie);
        $crew->rol()->associate($rol);
        $crew->save();
        return new CrewResource($crew);
    }


    public function destroy($id) {
        $crew = Crew::findOrFail($id);
        $crew->delete();
        return response()->json([], 204);
    }
}
