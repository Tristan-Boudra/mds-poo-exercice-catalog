<?php
namespace App\Http\Controllers;
use App\Models\Movie;

class MovieController extends Controller
{
    public function show($id) {
        $movie = Movie::find($id);
        return view('movies.show', ['movies' => $movie]);
    }

    public function movies(){
        $request = request();
        $page = $request->input('page');
        $order_by = $request->input('order_by');
        $order = $request->input('order');

        $query = movie::query();

        if(($order_by == 'startYear' || $order_by == 'averageRating') && ($order == 'asc' || $order == 'desc')){
            $query->orderBy($order_by, $order);
        }
        $movies = $query->paginate(20);
        return view('movies', ['movies' => $movies, 'page' => $page, 'order_by' => $order_by, 'order' => $order]);
    }

    public function random(){
        $movies = Movie::inRandomOrder()->whereNotNull('poster')->limit(10)->get();
        return view('movies.random', ['movies' => $movies]);
    }
}
?>