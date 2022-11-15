<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Movies</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <h1 class="text-center font-bold text-3xl">List of 20 movies</h1>
  <div class="max-w-5xl mx-auto p-10 flex flex-row flex-wrap">
    @foreach ($movies as $movie)
    <div class="mx-auto p-1">
      <h1 class="text-center">{{ $movie->originalTitle }}</h1>
      <img src="{{ $movie->poster }}" alt="" class="mx-auto">
    </div>
    @endforeach
    <div>
      {{ $movies->links('paginator') }}
    </div>
  </div>
</body>
</html>