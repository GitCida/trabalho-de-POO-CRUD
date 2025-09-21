<h1>Evento - {{ $event->name }} </h1>

@extends('layouts.app')

@section('content')
<form action="{{ route('events.destroy', ['event' => $event->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Tem certeza que deseja deletar esse evento?')">Deletar</button>
</form>
@endsection