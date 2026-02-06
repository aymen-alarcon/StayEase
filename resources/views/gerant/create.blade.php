<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Create Hotel - Gerant Dashboard</title>
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
                <h3 class="text-primary"><i class="fa fa-bed me-2"></i>Gerant</h3>
            </a>
        </nav>
    </div>

    <div class="content">

        <div class="container-fluid pt-4 px-4">
            <h5 class="fw-bold">Create New Hotel</h5>
        </div>


        <div class="container-fluid pt-4 px-4">
            <div class="alert alert-info">
                <i class="fa fa-info-circle me-2"></i>
                Your hotel will be reviewed by admin before publication.
            </div>
        </div>


        <div class="container-fluid pt-4 px-4 mb-4">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="table-container p-4">

                        <form action="{{ route('hotels.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-3">
                                <label class="form-label fw-bold">Hotel Name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       value="{{ old('name') }}"
                                       required>
                            </div>





                            <div class="mb-3">
                                <label class="form-label fw-bold">Addresse</label>
                                <input type="text"
                                       name="addresse"
                                       class="form-control"
                                       value="{{ old('addresse') }}"
                                       required>
                            </div>


                            <div class="mb-3">
                                <label class="form-label fw-bold">Star Rating</label>
                                <select name="rating" class="form-select">
                                    <option value="">Select rating</option>
                                    <option value="3">3 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="5">5 Stars</option>
                                </select>
                            </div>


                            <div class="mb-4">
                                <label class="form-label fw-bold">Hotel Image</label>
                                <input type="file"
                                       name="image"
                                       class="form-control"
                                       multiple
                                       accept="image/*">
                            </div>


                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check me-2"></i>Submit for Approval
                                </button>

                                <a href="{{ route('hotels.index') }}"
                                   class="btn btn-light border">
                                    Cancel
                                </a>
                            </div>

                        </form>

                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="table-container p-3">
                        <h6 class="fw-bold">Form Guidelines</h6>
                        <ul>
                            <li>Use a clear hotel name</li>
                            <li>Complete address</li>
                            <li>Good description</li>
                            <li>High-quality images</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>

