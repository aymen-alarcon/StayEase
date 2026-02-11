@include("Includes.header")
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <img src="https://d17k8relgo9zj1.cloudfront.net/rcimg/2/uRUIu0ccm0Imst2jM930XfI571HOCieekQ-LBAiiRy4/fit/0/2000/ce/1/aHR0cHM6Ly9yb29tY2FyZC1wdWJsaWMtZGF0YS04MmhkazJraHNkLnMzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tL3Jvb21jYXJkL2hvdGVscy9pbWFnZXMvdGhlLXJpdHotY2FybHRvbi10b3JvbnRvLXRvcm9udG8tZDI0ZWYxZTkuanBn.jpg" class="img-fluid rounded shadow-sm mb-4" alt="Chambre">
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
    <div class="row">
        <div class="col-lg-8">
            <img src="https://d17k8relgo9zj1.cloudfront.net/rcimg/2/uRUIu0ccm0Imst2jM930XfI571HOCieekQ-LBAiiRy4/fit/0/2000/ce/1/aHR0cHM6Ly9yb29tY2FyZC1wdWJsaWMtZGF0YS04MmhkazJraHNkLnMzLWV1LXdlc3QtMS5hbWF6b25hd3MuY29tL3Jvb21jYXJkL2hvdGVscy9pbWFnZXMvdGhlLXJpdHotY2FybHRvbi10b3JvbnRvLXRvcm9udG8tZDI0ZWYxZTkuanBn.jpg" class="img-fluid rounded shadow-sm mb-4" alt="Chambre">

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
                    @auth                    
                        <a href="/Reservation/Index/{{ $room->id }}" class="btn btn-dark btn-lg w-100">Réserver maintenant</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</body>
</html>