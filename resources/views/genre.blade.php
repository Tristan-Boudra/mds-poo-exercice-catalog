<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Genres</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="max-w-5xl mx-auto">
  <h1 class="text-center font-bold text-3xl">All genres of movies</h1>
        <div class="max-w-5xl mx-auto p-10 flex flex-row flex-wrap">
            @foreach ($genres as $genre)
            <div class="p-1">
                <p>{{ $genre->label }}</p>
            </div>
            @endforeach
        </div>
</body>
</html>