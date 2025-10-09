@extends('layouts.app')

@section('content')
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
<h3>Criar evento</h3>
<form action="{{ route('events.store') }}" method="post">
    @csrf
    <label for="name">Digite o nome do evento: </label>
    <input class="inputs" type="text" name="name" placeholder="ex.: Formatura 3° ano" required>
    <label for="location">Localização: </label>
    <input class="inputs" type="text" name="location" placeholder="ex.: DS eventos" required>
    <button class="buttons" type="submit">Criar evento</button>
</form>
@endsection