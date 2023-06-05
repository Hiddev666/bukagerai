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
            <div class="container mt-5">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Category</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $p)
                    <tr>
                    <td><a href="/admin/update2/{{ $p->id }}">{{ $p->name }}</a></td>
                      <td>{{ $p->price }}</td>
                      <td>{{ $p->brand }}</td>
                      <td>{{ $p->category }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>

        </div>    
    </div>    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>
</html>