<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hotel Details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="/img/favicon.ico" rel="icon">

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style1.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative bg-white d-flex p-0">

    {{-- SIDEBAR --}}
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="{{ route('admin.index') }}" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">
                    <i class="fa fa-building me-2"></i>Admin
                </h3>
            </a>

            <div class="navbar-nav w-100">
                <a href="{{ route('admin.index') }}" class="nav-item nav-link">
                    <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                </a>
            </div>
        </nav>
    </div>


    <div class="content">


        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <span class="navbar-text fw-bold">Hotel </span>
        </nav>


        <div class="container-fluid pt-4 px-4">
            <a href="{{ route('admin.index') }}" class="btn btn-secondary mb-3">
                <i class="fa fa-arrow-left me-2"></i>Back
            </a>

            <div class="row g-4">


                <div class="col-lg-8">


                    <div class="bg-white rounded shadow mb-4">
                        <img src="/storage/{{ $hotel->image }}"
                             class="img-fluid rounded-top"
                             style="max-height:300px; width:100%; object-fit:cover;">
                    </div>


                    <div class="bg-white rounded shadow p-4">
                        <h2 class="fw-bold">{{ $hotel->name }}</h2>
                        <p class="text-muted">
                            <i class="fa fa-map-marker-alt me-2"></i>
                            {{ $hotel->adresse }}
                        </p>

                        <p class="text-warning">
                            <i class="fa fa-star me-2"></i>
                            {{ $hotel->rating }}
                        </p>

                        <hr>

                        <p>
                            <strong>Created By:</strong>
                            {{ $hotel->user->name  }}
                        </p>


                    </div>
                </div>

              
                <div class="col-lg-4">


                    <div class="bg-white rounded shadow p-4 mb-4">
                        <h5 class="fw-bold mb-3">Moderation Actions</h5>

                        @if($hotel->status === 'pending')
                            <form method="POST" action="{{ route('admin.hotels.approve', $hotel) }}">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-success w-100 mb-2">
                                    <i class="fa fa-check me-2"></i>Approve
                                </button>
                            </form>

                            <form method="POST" action="{{ route('admin.hotels.reject', $hotel) }}">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-danger w-100">
                                    <i class="fa fa-times me-2"></i>Reject
                                </button>
                            </form>
                        @else
                            <p class="text-muted text-center">No actions available</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <div class="text-center text-muted border-top pt-3">
                <small>&copy; 2024 Hotel Admin Panel</small>
            </div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/main1.js"></script>
</body>
</html>
