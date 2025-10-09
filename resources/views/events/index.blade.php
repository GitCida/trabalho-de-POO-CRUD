@extends('layouts.app')

@section('create')
<a class="links" href="{{ route('events.create') }}">Criar evento</a>
@endsection

@section('content')
@if (session()->has('message'))
    <p id="message">{{ session()->get('message') }}</p>
@endif
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Evento</th>
            <th>Localização</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->id }}</td>
            <td>{{ $event->name }}</td>
            <td>{{ $event->location }}</td>
            <td>
                <a class="links" href="{{ route('events.edit', ['event' => $event->id]) }}">Editar</a> | 
                <a class="links" href="{{ route('events.show', ['event' => $event->id]) }}">Deletar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
