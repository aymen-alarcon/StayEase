
section class="hero">
    <div class="container">
        <h1>Discover Luxury Hotels</h1>
        <p>Find your perfect accommodation</p>
    </div>
</section>


<div class="container">
    <div class="search-box">
        <form method="GET" class="row g-2">
            <div class="col-md-5">
                <input type="text" name="name" class="form-control" placeholder="Hotel name" value="{{ request('search') }}">
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-search w-100"><i class="fa fa-search"></i> Search</button>
            </div>
        </form>
    </div>
</div>


<div class="container pb-5">
    @if($hotels)
        <div class="row g-4">
            @foreach($hotels as $hotel)
                <div class="col-md-6 col-lg-4">
                    <div class="card hotel-card">

                        <div style="height: 220px; overflow: hidden;">
                            @if($hotel->image)
                                <img src="{{ asset('storage/' . $hotel->image) }}" alt="{{ $hotel->name }}" class="hotel-img">
                            @else
                                <div class="d-flex align-items-center justify-content-center" style="height: 100%; background: linear-gradient(135deg, var(--secondary) 0%, var(--primary-dark) 100%); color: rgba(255,255,255,0.3);">
                                    <i class="fas fa-image fa-3x"></i>
                                </div>
                            @endif
                        </div>


                        <div class="card-body d-flex flex-column">
                            <h5 class="hotel-title mb-2">{{ $hotel->name }}</h5>

                            <p class="hotel-address mb-2">
                                <i class="fas fa-map-marker-alt" style="color: var(--primary);"></i> {{ $hotel->addresse }}
                            </p>

                            <div class="hotel-rating mb-3">

                                    ($hotel->rating))
                                        <i class="fas fa-star"></i>

                                <span style="color: var(--text-secondary); margin-left: 8px;">{{ $hotel->rating }}/5</span>
                            </div>

                            <a href="{{ route('hotels.show', $hotel->id) }}" class="btn btn-details mt-auto">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $hotels }}
        </div>
    @else
        <div class="text-center py-5">
            <i class="fas fa-search" style="font-size: 3rem; color: var(--border-light);"></i>
            <h4 class="mt-3" style="color: var(--text-primary);">No Hotels Found</h4>
            <p style="color: var(--text-secondary);">Try adjusting your search filters</p>
        </div>
    @endif
</div>

@endsection
