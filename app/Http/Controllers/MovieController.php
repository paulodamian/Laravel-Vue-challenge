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


    public function store(Request $request) {
        $vd = $request->validate([
            'title' => 'required|max:255',
            'year' => 'required|numeric',
        ]);

        $movie = new Movie();
        $movie->title = $vd['title'];
        $movie->year = $vd['year'];
        $movie->save();
        return new MovieResource($movie);
    }


    public function update(Request $request, $id) {
        $movie = Movie::findOrFail($id);

        $vd = $request->validate([
            'title' => 'required|max:255',
            'year' => 'required|numeric',
        ]);

        $movie->title = $vd['title'];
        $movie->year = $vd['year'];
        $movie->save();
        return new MovieResource($movie);
    }


    public function destroy($id) {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return response()->json([], 204);
    }
}
