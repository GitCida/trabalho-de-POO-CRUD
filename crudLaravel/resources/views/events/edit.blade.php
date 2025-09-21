@extends('layouts.app')

@section('content')
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
<h3>Editar evento</h3>
<form action="{{ route('events.update', ['event' => $event->id]) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Nome do evento: </label>
    <input type="text" name="name" value="{{ $event->name }}" required>
    <label for="location">Localização: </label>
    <input type="text" name="location" value="{{ $event->location }}" required>
    <button type="submit">Editar</button>
</form>
@endsection