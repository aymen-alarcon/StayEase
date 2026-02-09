
<form method="POST" action="{{ route('rooms.update', $room) }}">
@csrf
@method('PUT')

<input name="number" value="{{ $room->number }}" class="form-control mb-2">

<input name="price_per_night" value="{{ $room->price_per_night }}" class="form-control mb-2">

<input name="capacity" value="{{ $room->capacity }}" class="form-control mb-2">

<textarea name="description">{{ $room->description }}</textarea>

<select name="tags[]" multiple>
@foreach ($tags as $tag)
<option value="{{ $tag->id }}"
{{ in_array($tag->id, $room->tags->pluck('id')->all()) ? 'selected' : '' }}>
{{ $tag->name }}
</option>
@endforeach
</select>

<button class="btn btn-warning">Update</button>
</form>
