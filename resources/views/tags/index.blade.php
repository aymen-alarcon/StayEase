

<h2>Liste des Tags</h2>

<a href="{{ route('tags.create') }}">Ajouter un tag</a>

<ul>
@foreach ($tags as $tag)
    <li>
        {{ $tag->name }}
        <form action="{{ route('tags.destroy', $tag) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Edit</button>
        </form>
    </li>
@endforeach
</ul>
