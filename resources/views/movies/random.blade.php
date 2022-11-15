<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Random</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="max-w-5xl mx-auto">
  <h1 class="text-center font-bold text-3xl">Choose a movie</h1>
        <div class="max-w-5xl mx-auto p-10 flex flex-row flex-wrap">
            @foreach ($movies as $movie)
            <div class="p-1">
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
        </div>
</body>
</html>