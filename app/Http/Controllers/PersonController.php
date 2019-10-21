<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResource;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PersonController extends Controller
{
    public function index() {
        return PersonResource::collection(Person::paginate(20));
    }


    public function show($personId) {
        $data = Cache::rememberForever('/people/' . $personId, function() use($personId) {
            PersonResource::withoutWrapping();
            $model = Person::with('aliases', 'roles.rol', 'roles.movie')->findOrFail($personId);
            return new PersonResource($model);
        });

        return $data;
    }


    public function store(Request $request) {
        $vd = $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
        ]);

        $person = new Person();
        $person->firstName = $vd['firstName'];
        $person->lastName = $vd['lastName'];
        $person->save();
        return new PersonResource($person);
    }


    public function update(Request $request, $id) {
        $person = Person::findOrFail($id);

        $vd = $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
        ]);

        $person->firstName = $vd['firstName'];
        $person->lastName = $vd['lastName'];
        $person->save();
        Cache::forget('/people/' . $id);
        return new PersonResource($person);
    }


    public function destroy($id) {
        $person = Person::findOrFail($id);
        $person->delete();
        Cache::forget('/people/' . $id);
        return response()->json([], 204);
    }
}
