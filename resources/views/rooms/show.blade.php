{{-- <h1>Chambre {{ $room->number }}</h1>

<p>Prix : {{ $room->price_per_night }} €/nuit</p>
<p>Capacité : {{ $room->capacity }} personnes</p>

<h3>Tags</h3>
@foreach ($room->tags as $tag)
    <span class="badge">{{ $tag->name }}</span>
@endforeach

<h3>Propriétés</h3>
@foreach ($room->properties as $property)
    <span>{{ $property->icon }} {{ $property->name }}</span>
@endforeach --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <img src="https://d17k8relgo9zj1.cloudfront.net/rcimg/2/uRUIu0ccm0Imst2jM930XfI571HOCieekQ-LBAiiRy4/fit/0/2000/ce/1/aHR0cHM6Ly9yb29tY2FyZC1wdWJsaWMtZGF0YS04MmhkazJraHNkLnMzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tL3Jvb21jYXJkL2hvdGVscy9pbWFnZXMvdGhlLXJpdHotY2FybHRvbi10b3JvbnRvLXRvcm9udG8tZDI0ZWYxZTkuanBn.jpg" class="img-fluid rounded shadow-sm mb-4" alt="Chambre">

            <div class="d-flex justify-content-between align-items-start mb-3">
                <h1>Chambre {{ $room->number }}</h1>
                <h2 class="text-warning">{{ $room->price_per_night }} € <small class="text-muted fs-6">/ nuit</small></h2>
            </div>

            <hr>

            <h4>Description</h4>
            <p class="text-muted">Capacité maximale : <strong>{{ $room->capacity }} personnes</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            <div class="mt-4">
                <h5>Équipements & Propriétés</h5>
                <div class="row mt-2">
                    @foreach ($room->properties as $property)
                        <div class="col-6 col-md-4 mb-2">
                            <i class="me-2">{{ $property->icon }}</i> {{ $property->name }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card p-4 shadow-sm">
                <h4>Tags</h4>
                <div class="mb-4">
                    @foreach ($room->tags as $tag)
                        <span class="badge bg-light text-dark border me-1">{{ $tag->name }}</span>
                    @endforeach
                </div>
                <button class="btn btn-dark btn-lg w-100">Réserver maintenant</button>
            </div>
        </div>
    </div>
</div>



</body>
</html>
