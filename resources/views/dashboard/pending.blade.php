<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pending Hotels | Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="'/css/bootstrap.min.css' " rel="stylesheet">


    <link href="'/css/style1.css' " rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative bg-white d-flex p-0">


    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="{{ route('admin.dashboard') }}" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">
                    <i class="fa fa-building me-2"></i>ADMIN
                </h3>
            </a>

            <div class="navbar-nav w-100">
                <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link">
                    <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                </a>

                <a href="{{ route('admin.hotels.pending') }}" class="nav-item nav-link active">
                    <i class="fa fa-hourglass-half me-2"></i>Pending Hotels
                </a>

                <a href="{{ route('admin.hotels.approved') }}" class="nav-item nav-link">
                    <i class="fa fa-check-circle me-2"></i>Approved Hotels
                </a>

                <a href="{{ route('admin.hotels.rejected') }}" class="nav-item nav-link">
                    <i class="fa fa-times-circle me-2"></i>Rejected Hotels
                </a>
            </div>
        </nav>
    </div>




    <div class="content">


        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <h4 class="m-0 text-primary">Pending Hotel Approvals</h4>
        </nav>


        <div class="container-fluid pt-4 px-4">

            <div class="row g-4">

                @forelse ($hotels as $hotel)
                    <div class="col-sm-12 col-lg-6 col-xl-4">
                        <div class="hotel-card">


                            <div class="hotel-card-image">
                                <img
                                    src="{{ asset('storage/' . $hotel->image) }}"
                                    alt="{{ $hotel->name }}"
                                    style="width:100%; height:100%; object-fit:cover;"
                                >
                            </div>


                            <div class="hotel-card-body">
                                <h5 class="hotel-name">{{ $hotel->name }}</h5>

                                <p class="hotel-location">
                                    <i class="fa fa-map-marker-alt me-2"></i>
                                    {{ $hotel->adresse }}
                                </p>

                                <p class="hotel-rating">
                                    <i class="fa fa-star me-2 text-primary"></i>
                                    {{ $hotel->rating }} Stars
                                </p>

                                <div class="mt-3 pt-3 border-top">

                                    <div class="d-flex gap-2">


                                        <form action="{{ route('admin.hotels.approve', $hotel->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-success w-100">
                                                <i class="fa fa-check me-1"></i>Approve
                                            </button>
                                        </form>


                                        <form action="{{ route('admin.hotels.reject', $hotel->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-danger w-100">
                                                <i class="fa fa-times me-1"></i>Reject
                                            </button>
                                        </form>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted">
                        <p>No pending hotels found.</p>
                    </div>
                @endforelse

            </div>
        </div>


        <div class="container-fluid pt-4 px-4">
            <div class="text-center text-muted border-top pt-3">
                <small>&copy;  Hotel Moderation System</small>
            </div>
        </div>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src= '/js/main1.js' ></script>

</body>
</html>
