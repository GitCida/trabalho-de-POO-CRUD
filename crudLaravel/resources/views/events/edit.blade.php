<h1>editar</h1>

<form action="{{ route('events.update', ['event' => $event->id]) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Nome do evento</label>
    <input type="text" name="name" value="{{ $event->name }}" required>
    <label for="location">Localização</label>
    <input type="text" name="location" value="{{ $event->location }}" required>
    <button type="submit">Editar</button>
</form>