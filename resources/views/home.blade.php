<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            background-color: #201E1E;
        }

        .container {
            margin: auto;
            max-width: 900px;
        }
    </style>
</head>
<body>
    <div class="container text-white">
        <h1 class="font-bold text-3xl w-72 mx-auto text-[#DC1222] mt-5"><a href="/">{{ config('app.name') }}</a></h1>
        <div class="flex flex-row p-10 font-semibold text-xl mb-20">
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
        <div class="mx-auto p-10 flex flex-row flex-wrap">
            @foreach ($movies as $movie)
            <div class="p-1 mx-auto">
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
