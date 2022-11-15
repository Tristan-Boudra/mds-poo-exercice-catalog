<ul class="flex flex-row mt-10 m-auto">
  @foreach ($paginator->appends(request()->query())->linkCollection() as $movie)
    <li class="p-1">
      @if ($movie['active'])
        <span class="font-bold">{{ $movie['label'] }}</span>
      @else
        <a href="{{ $movie['url'] }}">{{ $movie['label'] }}</a>
      @endif
    </li>
  @endforeach
</ul>