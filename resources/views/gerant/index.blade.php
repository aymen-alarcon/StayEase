<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gerant Dashboard - Hotel Manager</title>
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
                <h3 class="text-primary"><i class="fa fa-bed me-2"></i>GÉRANT</h3>
            </a>
        </nav>
    </div>


    <div class="content">


        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control border-0" type="search" placeholder="Search hotels...">
            </form>
        </nav>

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                @php
                    $total = $hotels->count();
                    $pending = $hotels->where('status', 'pending')->count();
                    $approved = $hotels->where('status', 'approved')->count();

                @endphp
                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card p-4 text-center">
                        <i class="fa fa-bed fa-3x kpi-icon primary-gold"></i>
                        <p class="kpi-label">Total Hotels</p>
                        <h6 class="kpi-value">{{ $total }}</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card p-4 text-center">
                        <i class="fa fa-hourglass-half fa-3x kpi-icon warning-gold"></i>
                        <p class="kpi-label">Pending Review</p>
                        <h6 class="kpi-value" style="color: var(--warning);">{{ $pending }}</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card p-4 text-center">
                        <i class="fa fa-check-circle fa-3x kpi-icon success-green"></i>
                        <p class="kpi-label">Approved</p>
                        <h6 class="kpi-value" style="color: var(--success);">{{ $approved }}</h6>
                    </div>
                </div>
                
            </div>
        </div>


        <div class="container-fluid pt-4 px-4 mb-4">
            <div class="row g-4">
                <div class="col-12">
                    <div class="table-container p-3">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">My Hotels</h6>
                            <a href="{{ route('hotels.index') }}" class="btn btn-primary btn-sm">View All</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Hotel Name</th>
                                        <th>Adresse</th>
                                        <th>Rating</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($hotels as $hotel)
                                        <tr>
                                            <td><strong>{{ $hotel->name }}</strong></td>
                                            <td>{{ $hotel->adresse}}</td>
                                            <td>{{ $hotel->rating }} ★</td>
                                            <td>
                                                <span class="badge badge-{{ $hotel->status }}">
                                                    {{ ucfirst($hotel->status) }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('hotels.show', $hotel->id) }}" class="btn btn-sm btn-review">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if($hotels->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">No hotels found.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded-top p-4 text-center">
                &copy; <a href="#">Hotel Management Platform</a>, All Right Reserved.
            </div>
        </div>

    </div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
