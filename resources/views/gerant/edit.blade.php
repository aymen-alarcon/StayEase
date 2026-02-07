<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Hotel - Gerant Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style1.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative bg-white d-flex p-0">


    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="{{ route('gerant.index') }}" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-bed me-2"></i>GERANT</h3>
            </a>
        </nav>
    </div>


    <div class="content">


        <div class="container-fluid pt-4 px-4">
            <h5 class="fw-bold">Edit Hotel: {{ $hotel->name }}</h5>
        </div>


        @if($hotel->statut === 'pending')
            <div class="container-fluid pt-4 px-4">
                <div class="alert alert-warning">
                    <i class="fa fa-exclamation-triangle me-2"></i>
                    This hotel is currently pending review. Modifications will require admin approval.
                </div>
            </div>
        @endif


        <div class="container-fluid pt-4 px-4 mb-4">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="table-container p-4">

                        <form action="{{ route('gerant.update', $hotel->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="mb-3">
                                <label class="form-label fw-bold">Hotel Name </label>
                                <input type="text" name="name" class="form-control"
                                       value="{{ old('name', $hotel->name) }}" required>
                            </div>


                            <div class="mb-3">
                                <label class="form-label fw-bold">Addresse </label>
                                <input type="text" name="address" class="form-control"
                                       value="{{ old('addresse', $hotel->addresse) }}" required>
                            </div>





                            <div class="mb-3">
                                <label class="form-label fw-bold">Star Rating </label>
                                <select name="rating" class="form-select" required>
                                    <option value="3" {{ $hotel->rating == 3  }}>3 Stars</option>
                                    <option value="4" {{ $hotel->rating == 4  }}>4 Stars</option>
                                    <option value="5" {{ $hotel->rating == 5  }}>5 Stars</option>
                                </select>
                            </div>




                            <div class="mb-4">
                                <label class="form-label fw-bold">Hotel Images</label>
                                <input type="file" name="images[]" class="form-control" multiple accept="image/*">
                                <small class="text-muted d-block mt-2">Upload up to 10 images (JPG, PNG)</small>
                            </div>


                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save me-2"></i>Save Changes
                                </button>
                                <a href="{{ route('gerant.index') }}" class="btn btn-light border">Cancel</a>
                            </div>

                        </form>

                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="table-container p-3">
                        <h6 class="fw-bold">Hotel Status</h6>
                        <p>Current Status: <span class="badge">{{($hotel->status) }}</span></p>
                        <hr>
                       
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
