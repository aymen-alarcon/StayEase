<h2>Créer un Tag</h2>

<form action="{{ route('tags.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nom du tag">
    <button type="submit">Enregistrer</button>
</form>
