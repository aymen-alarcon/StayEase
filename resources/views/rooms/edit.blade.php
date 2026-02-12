<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <title>Modifier la Chambre</title>

    <style>
        body { background-color: #f4f7f6; }
        .card-header { border-bottom: none; }
    </style>
</head>
<body>


    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.html"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('rooms.index') }}" class="nav-item nav-link">Rooms</a>
                            @guest
                                <a href="/signup" class="nav-item nav-link">SignUp</a>
                                <a href="/login" class="nav-item nav-link">Login</a>
                            @endguest

                            @auth
                                <form action="/logout" method="post" class="d-flex align-items-center">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="nav-item nav-link btn btn-link p-0 m-0">
                                        Log Out
                                    </button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>





<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card shadow border-0 overflow-hidden">
                <div class="card-header bg-warning text-dark py-3">
                    <h5 class="mb-0 fw-bold text-center text-uppercase">
                        <i class="bi bi-pencil-square me-2"></i>Modifier la Chambre: {{ $rooms->number }}
                    </h5>
                </div>

                <div class="card-body p-4 bg-white">
                    <form method="POST" action="{{ route('rooms.update', $rooms->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Numéro de chambre</label>
                                <div class="input-group shadow-sm">
                                    <span class="input-group-text bg-white"><i class="bi bi-door-closed"></i></span>
                                    <input name="number" value="{{ $rooms->number }}" class="form-control" placeholder="101">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Prix / Nuit (€)</label>
                                <div class="input-group shadow-sm">
                                    <span class="input-group-text bg-white text-success fw-bold">€</span>
                                    <input name="price_per_night" value="{{ $rooms->price_per_night }}" type="number" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-bold">Capacité (personnes)</label>
                                <div class="input-group shadow-sm">
                                    <span class="input-group-text bg-white"><i class="bi bi-people"></i></span>
                                    <input name="capacity" value="{{ $rooms->capacity }}" type="number" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-bold">Description détaillée</label>
                                <textarea name="description" class="form-control shadow-sm" rows="4" placeholder="Parlez de la chambre...">{{ $rooms->description }}</textarea>
                            </div>

                            <div class="col-md-12">
                                <hr class="my-3">
                                <label class="form-label fw-bold text-primary mb-2">
                                    <i class="bi bi-tags me-1"></i> Gérer les Tags
                                </label>
                                <select name="tags[]" multiple class="form-select shadow-sm" style="height: 160px;">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                            class="p-2 border-bottom"
                                            {{ in_array($tag->id, $rooms->tags->pluck('id')->all()) ? 'selected' : '' }}>
                                            {{ $tag->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="form-text mt-2">
                                    <i class="bi bi-info-circle me-1"></i> Maintenez <strong>Ctrl</strong> pour sélectionner plusieurs tags.
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-3 mt-5">
                            <a href="{{ route('rooms.index') }}" class="btn btn-light border px-4">
                                Annuler
                            </a>
                            <button type="submit" class="btn btn-warning px-5 fw-bold shadow-sm">
                                <i class="bi bi-save me-1"></i> Mettre à jour
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
