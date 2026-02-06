{{--
@foreach ($rooms as $room)
    <h3>
        <a href="{{ route('rooms.show', $room->id) }}">
            Chambre {{ $room->number }}
        </a>
    </h3>
    <p>{{ $room->price_per_night }} €/nuit</p>
@endforeach

<form method='GET' action='{{ route("rooms.index") }}'>
<select name='tag'>
<option value=''>Tous les tags</option>
@foreach ($allTags as $tag)
<option value='{{ $tag->id }}'>{{ $tag->name }}</option>
@endforeach
</select>
<select name='property'>
<option value=''>Toutes les propriétés</option>
@foreach ($allProperties as $prop)
<option value='{{ $prop->id }}'>{{ $prop->name }}</option>
@endforeach
</select>
<button type='submit'>Filtrer</button>
</form> --}}


<form method="GET" action="{{ route('rooms.index') }}">
    <select name="tag">
        <option value="">Tous les tags</option>
        @foreach ($allTags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>

    <select name="property">
        <option value="">Toutes les propriétés</option>
        @foreach ($allProperties as $prop)
            <option value="{{ $prop->id }}">{{ $prop->name }}</option>
        @endforeach
    </select>

    <button type="submit">Filtrer</button>
</form>

<hr>

@foreach ($rooms as $room)
    <h3>
        <a href="{{ route('rooms.show', $room->id) }}">
            Chambre {{ $room->number }}
        </a>
    </h3>
    <p>{{ $room->price_per_night }} €/nuit</p>
@endforeach
