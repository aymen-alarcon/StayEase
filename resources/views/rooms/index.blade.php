<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotelier - Hotel HTML </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @include('Includes.header')
    <!-- Carousel Start -->
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

                        <p class="card-text text-secondary small">
                            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.
                        </p>

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
            </div>
        @endforeach
    </div>
</div>



</body>
</html>
