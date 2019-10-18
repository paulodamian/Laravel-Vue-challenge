<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index() {
        return Person::all();
    }

    public function show($personId) {
        return Person::with('aliases', 'roles.rol', 'roles.movie')->findOrFail($personId);
    }
}
