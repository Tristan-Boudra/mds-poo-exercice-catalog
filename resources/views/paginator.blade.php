
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Paginator</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <style>
    * {
      background-color: #201E1E;
    }
    </style>
<body>
  <div class="w-2/5 mx-auto">
    <ul class="flex flex-row mt-10 m-auto text-white">
      @foreach ($paginator->appends(request()->query())->linkCollection() as $movie)
        <li class="p-1">
          @if ($movie['active'])
            <span class="font-bold text-[#DC1222]">{{ $movie['label'] }}</span>
          @else
            <a href="{{ $movie['url'] }}">{{ $movie['label'] }}</a>
          @endif
        </li>
      @endforeach
    </ul>
  </div>
</body>
</html>