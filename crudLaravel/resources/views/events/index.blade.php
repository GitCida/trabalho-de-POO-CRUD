<h1>eventos</h1>
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<a href="{{ route('events.create') }}">Criar evento</a>
<ul>
    @foreach ($events as $event)
    <li>
        {{ $event-> id }} - {{ $event-> name }} - {{ $event-> location }} | <a href="{{ route('events.edit', ['event' => $event->id]) }}">Editar</a> | <a href="">Deletar</a>
    </li>
    @endforeach
</ul>
