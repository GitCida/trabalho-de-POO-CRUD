<h1>Criar evento</h1>

<form action="{{ route('events.store') }}" method="post">
    @csrf
    <label for="name">Digite o nome do evento</label>
    <input type="text" name="name" placeholder="ex.: Formatura 3° ano" required>
    <label for="location">Localização</label>
    <input type="text" name="location" placeholder="ex.: DS eventos" required>
    <button type="submit">Criar evento</button>
</form>