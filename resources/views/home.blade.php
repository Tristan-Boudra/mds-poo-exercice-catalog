<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .container {
            margin: auto;
            max-width: 900px;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ config('app.name') }}</h1>
        <a class="no-underline" href="/movies"><h1 class="no-underline">Show 20 movies</h1></a>
        <a class="no-underline" href="/movies?order_by=startYear&order=asc"><h1 class="no-underline">Start Year</h1></a>
        <a class="no-underline" href="/movies?order_by=averageRating&order=desc"><h1 class="no-underline">Average Rating</h1></a>
        <a class="no-underline" href="/movies/random"><h1 class="no-underline">Random movies</h1></a>
        <div class="wrapper">
            @foreach ($movies as $movie)
            <div>
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
