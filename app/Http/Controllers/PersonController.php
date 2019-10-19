<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResource;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index() {
        return PersonResource::collection(Person::paginate(20));
    }

    public function show($personId) {
        PersonResource::withoutWrapping();
        $model = Person::with('aliases', 'roles.rol', 'roles.movie')->findOrFail($personId);
        return new PersonResource($model);
    }
}
