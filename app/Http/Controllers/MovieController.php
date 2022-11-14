<?php
namespace App\Http\Controllers;
use App\Models\Movie;

class MovieController extends Controller
{
    public function show($id) {
        $movie = Movie::find($id);
        return view('show', ['movies' => $movie]);
        // return 'my movie';
    }
}
?>