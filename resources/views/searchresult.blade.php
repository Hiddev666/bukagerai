<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/img/logo_sm.svg') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Kelontong Market</title>
</head>
<body style="font-family: 'Work Sans', sans-serif;">
    
    @include('component.navbar')
    @yield('navbar')

    <div class="container mt-5 mb-5">
        <div class="container d-flex justify-content-between">
            <h3>Search Result for {{ $search }}</h3>
            <a href="{{ route('back') }}"><button class="btn btn-primary">x</button></a>
        </div>
        <div class="container d-flex justify-content-start w-100 mt-2">
            <div class="row d-flex justify-content-start">
                @forelse ($products as $p)
                <div class="col mt-3">
                <a href="/product/detail/{{ $p->id }}" class="text-decoration-none">
                    <div class="card shadow" style="width: 12.4rem; height: 17rem; cursor: pointer;">
                        <img src="/products_image/{{ $p->image }}" class="card-img-top object-fit-cover" style="width: 100%; height: 50%;" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-weight: 400;">{{ $p->name }}</p>
                            <h4 class="card-title" style="font-weight: 600;">{{  $convertToRupiah = "Rp" . number_format($p->price, 0, ',', '.') }}</h4>
                        </div>
                    </div>
                </a>
                </div>
                @empty
                @endforelse
        </div>
    </div>
</div>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
            </script>

</body>
</html>