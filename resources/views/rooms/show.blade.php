<h1>Chambre {{ $room->number }}</h1>
<p>Prix : {{ $room->price_per_night }} €/nuit</p>
<p>Capacité : {{ $room->capacity }} personnes</p>
<h3>Tags</h3>
@foreach ($room->tags as $tag)
<span class="badge">{{ $tag->name }}</span>
@endforeach
<h3>Propriétés</h3>
@foreach ($room->properties as $property)
<span>{{ $property->icon }} {{ $property->name }}</span>
@endforeach
