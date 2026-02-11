<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter une Chambre</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body { background-color: #f8f9fa; }
        .card { border-radius: 10px; overflow: hidden; }
        .input-group-text { background-color: #f1f3f5; }
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
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white py-3">
                    <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i>Ajouter une Nouvelle Chambre</h5>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('rooms.store') }}">
                        @csrf

                        <input name="hotel_id" type="hidden" value="1">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Numéro de chambre</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-door-open"></i></span>
                                    <input name="number" class="form-control" placeholder="Ex: 101" required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Prix par nuit (€)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                    <input name="price_per_night" type="number" class="form-control" placeholder="0.00" step="0.01" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label fw-bold">Capacité (personnes)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-users"></i></span>
                                    <input name="capacity" type="number" class="form-control" placeholder="Ex: 2" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Décrivez les atouts de la chambre..."></textarea>
                        </div>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-primary">Tags</label>
                                <small class="d-block text-muted mb-2">(Ctrl + Clic pour plusieurs)</small>
                                <select name="tags[]" multiple class="form-select" style="height: 120px;">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-success">Propriétés</label>
                                <small class="d-block text-muted mb-2">(Equipements disponibles)</small>
                                <select name="properties[]" multiple class="form-select" style="height: 120px;">
                                    @foreach ($properties as $prop)
                                        <option value="{{ $prop->id }}">{{ $prop->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ route('rooms.index') }}" class="btn btn-light border px-4">Annuler</a>
                            <button type="submit" class="btn btn-success px-5">
                                <i class="fas fa-check me-1"></i> Créer la chambre
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
