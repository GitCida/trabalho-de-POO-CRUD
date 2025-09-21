@extends('layouts.app')

@section('DS Eventos', 'Listagem de eventos')

@section('create')
<a href="{{ route('events.create') }}">Criar evento</a>
@endsection

@section('content')
@if (session()->has('message'))
    {{ session()->get('message') }}
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
                <a href="{{ route('events.edit', ['event' => $event->id]) }}">Editar</a> | 
                <a href="{{ route('events.show', ['event' => $event->id]) }}">Deletar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
