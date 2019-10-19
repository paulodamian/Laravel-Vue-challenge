<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        return MovieResource::collection(Movie::paginate(20));
    }

    public function show($movieId) {
        MovieResource::withoutWrapping();
        $model = Movie::with('crews.person', 'crews.rol')->findOrFail($movieId);
        return new MovieResource($model);
    }
}
