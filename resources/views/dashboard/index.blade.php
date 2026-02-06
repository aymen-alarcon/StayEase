<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style1.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative bg-white d-flex p-0">

   
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="{{ route('admin.dashboard') }}" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-building me-2"></i>Admin</h3>
            </a>

            <div class="navbar-nav w-100">
                <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link active">
                    <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                </a>
                <a href="{{ route('admin.hotels.pending') }}" class="nav-item nav-link">
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
            <h4 class="m-0 text-primary">Admin Dashboard</h4>
        </nav>


        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card p-4">
                        <p class="kpi-label">Total Hotels</p>
                        <h6 class="kpi-value">{{ $totalHotels }}</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card p-4">
                        <p class="kpi-label">Pending</p>
                        <h6 class="kpi-value text-warning">{{ $pendingHotels }}</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card p-4">
                        <p class="kpi-label">Approved</p>
                        <h6 class="kpi-value text-success">{{ $approvedHotels }}</h6>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card p-4">
                        <p class="kpi-label">Rejected</p>
                        <h6 class="kpi-value text-danger">{{ $rejectedHotels }}</h6>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid pt-4 px-4">
            <div class="bg-white rounded p-4 shadow-sm">
                <h6 class="mb-4 fw-bold">Recent Hotel Submissions</h6>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Adresse</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($recentHotels as $hotel)
                            <tr>
                                <td><strong>{{ $hotel->name }}</strong></td>
                                <td>{{ $hotel->adresse }}</td>
                                <td>{{ $hotel->rating  }}</td>
                                <td>
                                    <span class="badge
                                        @if($hotel->status === 'pending') badge-pending
                                        @elseif($hotel->status === 'approved') badge-approved
                                        @else badge-rejected @endif">
                                        {{ ($hotel->status) }}
                                    </span>
                                </td>
                                <td>
                                    @if($hotel->status === 'pending')
                                        <a href="{{ route('admin.hotels.pending') }}" class="btn btn-sm btn-primary">
                                            Review
                                        </a>
                                    @else
                                        —
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">
                                    No hotels found
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded-top p-4 text-center">
                &copy;  Hotels Platform
            </div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/main1.js"></script>

</body>
</html>
