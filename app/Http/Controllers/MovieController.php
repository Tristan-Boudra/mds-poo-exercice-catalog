<?php
namespace App\Http\Controllers;
use App\Models\Movie;

class MovieController extends Controller
{
    public function show($id) {
        $movie = Movie::find($id);
        return view('movies.show', ['movies' => $movie]);
    }

    // public function movies(){
    //     $movies = Movie::limit(20)->get();
    //     return view('movies', ['movies' => $movies]);
    // }

    public function movies(){
        $movies = Movie::paginate(20);
        return view('movies', ['movies' => $movies]);
    }
}
?>