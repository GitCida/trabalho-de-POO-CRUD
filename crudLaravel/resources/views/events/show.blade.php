@extends('layouts.app')

@section('content')
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
<form action="{{ route('events.destroy', ['event' => $event->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button class="buttons" type="submit" onclick="return confirm('Tem certeza que deseja deletar esse evento?')">Deletar</button>
</form>
@endsection