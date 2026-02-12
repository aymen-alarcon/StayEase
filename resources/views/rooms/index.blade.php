@include('Includes.header')
    <div class="container py-5">
    <form method="GET" action="{{ route('rooms.index') }}" class="row g-3 mb-5 align-items-end">
        <div class="col-md-4">
            <label class="form-label fw-bold">Tags</label>
            <select name="tag" class="form-select">
                <option value="">Tous les tags</option>
                @foreach ($allTags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label fw-bold">Propriétés</label>
            <select name="property" class="form-select">
                <option value="">Toutes les propriétés</option>
                @foreach ($allProperties as $prop)
                    <option value="{{ $prop->id }}">{{ $prop->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-dark w-100">Filtrer les résultats</button>
        </div>
        <div class="col-md-4">
            @auth
            @if(Auth::user()->roles->name === 'Gerant')
            <a href="{{ route('rooms.create')}}" class="btn btn-primary">Ajourte</a>
            @endif
            @endauth
        </div>


    </form>

    <div class="row">
        @foreach ($rooms as $room)
            @if ($room->reservation()->where("status", "not paid")->exists())
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <img src="https://d17k8relgo9zj1.cloudfront.net/rcimg/2/uRUIu0ccm0Imst2jM930XfI571HOCieekQ-LBAiiRy4/fit/0/2000/ce/1/aHR0cHM6Ly9yb29tY2FyZC1wdWJsaWMtZGF0YS04MmhkazJraHNkLnMzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tL3Jvb21jYXJkL2hvdGVscy9pbWFnZXMvdGhlLXJpdHotY2FybHRvbi10b3JvbnRvLXRvcm9udG8tZDI0ZWYxZTkuanBn.jpg" class="card-img-top" alt="Chambre">
                            <span class="badge bg-warning text-white position-absolute bottom-0 start-0 m-3 px-3 py-2">
                                {{ $room->price_per_night }}€/Nuit
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0">Chambre {{ $room->number }}</h5>
                                <div class="text-warning small">
                                    ★★★★★ </div>
                            </div>

                            <div class="d-flex gap-3 mb-3 text-muted small">
                                @foreach ($room->properties->take(3) as $prop)
                                    <span>{{ $prop->icon }} {{ $prop->name }}</span>
                                @endforeach
                            </div>

                        <div class="d-flex gap-2">
                            <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-warning text-white flex-grow-1">VIEW DETAIL</a>
                            @auth
                            @if(Auth::user()->roles->name === 'Gerant')
                          <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-primary">update</a>

                             <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" onsubmit="return confirm('Sure?')">
                             @csrf
                            @method('DELETE')
                           <button type="submit" class="btn btn-danger">Delete</button>
                       </form>
                       @endif
                       @endauth
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
</body>
</html>