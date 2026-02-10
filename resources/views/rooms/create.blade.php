<form method="POST" action="{{ route('rooms.store') }}">
@csrf

<input name="hotel_id" type="hidden" value="1">

<input name="number" class="form-control mb-2" placeholder="Numéro">

<input name="price_per_night" type="number" class="form-control mb-2">

<input name="capacity" type="number" class="form-control mb-2">

<textarea name="description" class="form-control mb-2"></textarea>

<select name="tags[]" multiple class="form-select mb-2">
@foreach ($tags as $tag)
<option value="{{ $tag->id }}">{{ $tag->name }}</option>
@endforeach
</select>

<select name="properties[]" multiple class="form-select mb-2">
@foreach ($properties as $prop)
<option value="{{ $prop->id }}">{{ $prop->name }}</option>
@endforeach
</select>

<button class="btn btn-success">Créer</button>
</form>
