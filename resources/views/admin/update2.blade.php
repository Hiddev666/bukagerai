<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>

    <link rel="icon" href="{{ asset('/img/logo_sm.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        #insert:hover {
            background-color: #cccccc;
            transition: .3s ease-in-out;
            color: white;
        }
    </style>

</head>
<body>
    
    <div class="d-flex">
        <div class="left w-25">
            @include('component.sidebar')
            @yield('sidebar')
        </div>
        <div class="right ms-5" style="width: 70%">
            <form action="{{ route('admin.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $products->id }}" name="id">
                <div class="container mt-5">
                    <h2>Update a Product</h2>
                    @if (Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <p>{{ Session::get('success') }}</p>
                      </div>
                    @endif
                    <div class="row mb-3 mt-3">
                        <div class="col">
                                <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $products->name }}">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Brand</label>
                            <select class="form-select" name="brand_id">
                                @foreach ($brands as $b)
                                <option value="{{ $b->id }}">{{ $b->name }}</option>
                                @endforeach
                              </select>
                        </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input class="form-control" type="number" id="formFile" name="price" value="{{ $products->price }}">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $products->description }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                        <div class="row">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <select class="form-select" name="category_id">
                                @foreach ($categories as $g)
                                <option value="{{ $g->id }}">{{ $g->name }}</option>
                                @endforeach
                          </select>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-25">Submit</button>
                </div>
            </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>
</html>