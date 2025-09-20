<h1>eventos</h1>

<ul>
    @foreach ($events as $event)
    <li>
        {{ $event-> id }} - {{ $event-> name }} - {{ $event-> location }}
    </li>
    @endforeach
</ul>
