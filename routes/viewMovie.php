<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Models\Movie;
    

Route::get('/', function () {
    $movies = Movie::inRandomOrder()->whereNotNull('poster')->limit(12)->get();

    return view('home', ['movies' => $movies]);
});

route::get('/movie/{id}', [MovieController::class, 'show']);
?>