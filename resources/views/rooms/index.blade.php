<h1>Liste des Chambres</h1>

<ul>
@foreach ($rooms as $room)
    <li>
        Chambre {{ $room->number }}
        <a href="{{ route('rooms.show', $room) }}">Voir détails</a>
    </li>
@endforeach
</ul>
