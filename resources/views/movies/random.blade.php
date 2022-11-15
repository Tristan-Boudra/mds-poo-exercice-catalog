<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Random</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    * {
        background-color: #201E1E;
    }
</style>
<body class="max-w-5xl mx-auto">
  <h1 class="text-center font-bold text-3xl text-[#DC1222]">Choose a random movie</h1>
  <div class="flex flex-row p-10 font-semibold text-xl mb-20 text-white">
            <div class="mx-auto hover:text-[#DC1222]">
                <a class="no-underline" href="/movies">Show 20 movies</a>
            </div>
            <div class="mx-auto hover:text-[#DC1222]">
                <a class="no-underline" href="/movies?order_by=startYear&order=asc">Start Year</a>
            </div>
            <div class="mx-auto hover:text-[#DC1222]">
                <a class="no-underline" href="/movies?order_by=averageRating&order=desc">Average Rating</a>
            </div>
            <div class="mx-auto hover:text-[#DC1222]">
                <a class="no-underline" href="/movies/random">Random movies</a>
            </div>
            <div class="mx-auto hover:text-[#DC1222]">
                <a class="no-underline" href="/genres">All genres</a>
            </div>
        </div>
        <div class="max-w-5xl mx-auto p-10 flex flex-row flex-wrap">
            @foreach ($movies as $movie)
            <div class="p-1 text-white hover:text-[#DC1222]">
                <h1 class="text-center">{{ $movie->originalTitle }}</h1>
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
        </div>
</body>
</html>