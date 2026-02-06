<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hotel Details - Gerant Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style1.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative bg-white d-flex p-0">


    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="#" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-bed me-2"></i>GERANT</h3>
            </a>
        </nav>
    </div>


    <div class="content">


        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
        </nav>


        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-12 d-flex justify-content-between align-items-start">
                    <div>
                        <h5 class="fw-bold text-primary">{{ $hotel->name }}</h5>
                        <p class="text-secondary mb-0">{{ $hotel->addresse }}</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('hotels.edit', $hotel->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit me-1"></i>Edit
                        </a>
                        <a href="{{ route('hotels.index') }}" class="btn btn-sm btn-light border">
                            <i class="fa fa-arrow-left me-1"></i>Back
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="table-container p-3">
                        <p class="text-secondary mb-1">Hotel Status</p>
                        <span class="badge badge-{{ $hotel->statut }}">{{ ucfirst($hotel->statut) }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="table-container p-3">
                        <p class="text-secondary mb-1">Star Rating</p>
                        <h6 class="text-primary fw-bold">{{ $hotel->rating }} ★</h6>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                @foreach($hotel->images as $image)
                    <div class="col-md-6">
                        <div class="bg-secondary rounded" style="height:300px; display:flex; align-items:center; justify-content:center; overflow:hidden;">
                            <img src="{{ asset('storage/' . $image->path) }}" alt="Hotel Image" class="img-fluid">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="container-fluid pt-4 px-4 mb-4">
            <div class="row g-4">
                <div class="col-lg-8">

                </div>


                <div class="col-lg-4">
                    <div class="table-container p-3">
                        <h6 class="fw-bold text-primary mb-2">Hotel Information</h6>
                        <p class="text-secondary mb-1">Address</p>
                        <p class="text-primary mb-2">{{ $hotel->addresse }}</p>



                        <p class="text-secondary mb-1">Star Rating</p>
                        <p class="text-primary mb-2">{{ $hotel->rating }} Stars</p>

                        <hr>



                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded-top p-4">
                <div class="row">
                    <div class="col-12 text-center text-sm-start">&copy; <a href="#">Hotel Management Platform</a>, All Right Reserved.</div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
