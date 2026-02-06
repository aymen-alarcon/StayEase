<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div style="background: #FFFFFF; border: 1px solid #E8E6E1; border-radius: 12px; padding: 1.5rem; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0" style="color: var(--dark); font-weight: 700;">Categories</h6>
                                <a href="/Dashboard/Categories/Create" class="btn btn-sm" style="background: var(--primary); color: var(--dark); border: none; border-radius: 8px;">Add New Category</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="p-2">Name</th>
                                            <th scope="col" class="p-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($categories) > 0)
                                            @foreach ($categories as $category)
                                                <tr style="border-color: #E8E6E1;">
                                                    <td style="padding: 1rem;">{{ $category->name }}</td>
                                                    <td class="p-2 d-flex justify-content-around">
                                                        <form action="/Dashboard/Categories/Destroy/{{ $category->id }}" method="POST">
                                                            @csrf
                                                            @method("DELETE")
                                                            <button type="submit">
                                                                <i class="fw-bold fs-4 bi bi-trash3"></i>
                                                            </button>
                                                        </form>
                                                        <a href="/Dashboard/Categories/Edit/{{ $category->id }}">
                                                            <i class="fw-bold fs-4 bi bi-pencil"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr style="border-color: #E8E6E1;" class="w-100">
                                                <td class="p-2">There is No Category Yet</td>
                                                <td class="p-2 d-flex justify-content-around">
                                                    <a href="">
                                                        <i class="fw-bold fs-4 bi bi-trash3"></i>
                                                    </a>
                                                    <a href="">
                                                        <i class="fw-bold fs-4 bi bi-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>