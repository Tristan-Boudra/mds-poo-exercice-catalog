<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $movies = Movie::inRandomOrder()->whereNotNull('poster')->limit(12)->get();
    return view('home', ['movies' => $movies]);
});
route::get('/navbar', [MovieController::class, 'navbar']);
route::get('/genres', [GenreController::class, 'list']);
route::get('/movies/random', [MovieController::class, 'random']);
route::get('/movies/{id}', [MovieController::class, 'show']);
route::get('/movies', [MovieController::class, 'movies']);