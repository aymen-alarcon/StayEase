<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">

    <meta charset="utf-8">
    <title>Hotel </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
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
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-building me-2"></i>Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">
                            @if(Auth::check())
                                {{ Auth::user()->firstname }}
                            @endif
                        </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="approvals.html" class="nav-item nav-link"><i class="fa fa-hourglass-half me-2"></i>Pending
                        Hotels</a>
                    <a href="approved.html" class="nav-item nav-link"><i class="fa fa-check-circle me-2"></i>Approved
                        Hotels</a>
                    <a href="rejected.html" class="nav-item nav-link"><i class="fa fa-times-circle me-2"></i>Rejected
                        Hotels</a>
                    <a href="/user-management" class="nav-item nav-link">
                        <i class="fa fa-solid fa-user me-2"></i>
                        User Management
                    </a>
                    <hr class="my-3" style="border-color: rgba(255,255,255,0.1);">
                    <a href="/logout" class="nav-item nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out-alt me-2"></i>
                        Log Out
                    </a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <hr class="dropdown-divider">
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center"></a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">
                                {{ Auth::user()->lastname }}
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            @auth
                                <a href="/admin-profile" class="dropdown-item">My Profile</a>
                                <a href="#" class="dropdown-item">Settings</a>
                                <a href="#" class="dropdown-item"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Log Out
                                </a>
                                <form id="logout-form" action="/logout" method="post" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Hotel Stats Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="kpi-card">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <i class="fa fa-solid fa-users fa-3x kpi-icon"></i>
                                </div>
                                <p class="kpi-label">Total Clients</p>
                                <h6 class="kpi-value">
                                    {{ $clientNumber }}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="kpi-card">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <i class="fa fa-user fa-3x kpi-icon" style="color: var(--warning);"></i>
                                </div>
                                <p class="kpi-label">Admins </p>
                                <h6 class="kpi-value" style="color: var(--warning);">
                                    {{ $adminNumber }}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="kpi-card">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <i class="fa fa-user fa-3x kpi-icon" style="color: var(--success);"></i>
                                </div>
                                <p class="kpi-label">Managers</p>
                                <h6 class="kpi-value" style="color: var(--success);">
                                    {{ $managerNumber }}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="kpi-card">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <i class="fa fa-times-circle fa-3x kpi-icon" style="color: var(--danger);"></i>
                                </div>
                                <p class="kpi-label">Banned users</p>
                                <h6 class="kpi-value" style="color: var(--danger);">
                                    {{ $banned }}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hotel Stats End -->

            <!-- Recent Submissions Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div
                            style="background: #FFFFFF; border: 1px solid #E8E6E1; border-radius: 12px; padding: 1.5rem; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0" style="color: var(--dark); font-weight: 700;">Recent Hotel Submissions
                                </h6>
                                <a href="#" class="btn btn-sm"
                                    style="background: var(--primary); color: var(--dark); border: none; border-radius: 8px;">View
                                    All</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" style="border: none;">
                                    <thead
                                        style="background: linear-gradient(135deg, var(--secondary) 0%, var(--primary-dark) 100%); color: white;">
                                        <tr>
                                            <th scope="col"
                                                style="background-color: white; padding: 1rem; border: none;">id</th>
                                            <th scope="col"
                                                style="background-color: white; padding: 1rem; border: none;">firstname
                                            </th>
                                            <th scope="col"
                                                style="background-color: white; padding: 1rem; border: none;">lastname
                                            </th>
                                            <th scope="col"
                                                style="background-color: white; padding: 1rem; border: none;">email</th>
                                            <th scope="col"
                                                style="background-color: white; padding: 1rem; border: none;">role</th>
                                            <th scope="col"
                                                style="background-color: white; padding: 1rem; border: none;">Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr style="border-color: #E8E6E1;">
                                                <td style="padding: 1rem;"><strong>{{ $user->id }}</strong></td>
                                                <td style="padding: 1rem;">{{ $user->firstname }}</td>
                                                <td style="padding: 1rem;">{{ $user->lastname }}</td>
                                                <td style="padding: 1rem;">{{ $user->email }}</td>
                                                <td style="padding: 1rem;">{{ $user->roles->name }}</td>
                                                <td style="padding: 1rem;">
                                                    <a href="hotel-detail.html" class="btn btn-sm"
                                                        style="background: var(--primary); color: var(--dark); border: none; border-radius: 6px; padding: 0.3rem 0.6rem;">Review
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Submissions End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Hotles</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="#">YouCode Team</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>