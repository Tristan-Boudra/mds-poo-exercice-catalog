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
  <div class="max-w-5xl mx-auto p-10">
    @foreach ($movies as $movie)
      <h1>{{ $movie->originalTitle }}</h1>
      <img src="{{ $movie->poster }}" alt=""> <br>
    @endforeach 
  </div>
</body>
</html>