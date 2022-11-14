<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>{{ $movies->primaryTitle }}</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
  <div class="border border-grey-600 max-w-5xl mx-auto p-10">
    <h1 class="text-center text-2xl">Discover {{ $movies->originalTitle }}</h1>
    <img src="{{ $movies->poster }}" alt="" class="mx-auto mt-10 rounded">
    <div class="h-0.5 w-96 bg-black mx-auto rounded mt-10"></div>
    <div>
      <p class="text-center mt-10"><span class="font-bold">Original title :</span> {{ $movies->originalTitle }}</p>
      <p class="text-center"><span class="font-bold">Start year :</span> {{ $movies->startYear }}</p>
      <p class="text-center"><span class="font-bold">Duration :</span> {{ $movies->runtimeMinutes }} minutes</p>
      <p class="text-center"><span class="font-bold">Genres :</span> {{ $movies->genres }}</p>
      <p class="text-center"><span class="font-bold">Summary :</span> {{ $movies->plot }}</p>
      <p class="text-center"><span class="font-bold">Rating :</span> {{ $movies->averageRating }}</p>
      <p class="text-center"><span class="font-bold">Number of votes :</span> {{ $movies->numVotes }}</p>
    </div>
  </div>
</body>
</html>