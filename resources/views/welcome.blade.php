<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('/img/logo_sm.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>

</style>
    </head>

<body style="font-family: 'Work Sans', sans-serif;">
    
    @include('component.navbar')
    @yield('navbar')

    <div class="container pt-5">
        <div id="carouselExampleAutoplaying d-flex justify-content-center w-50" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner w-100 border rounded" >
                @foreach ($posters as $dp)
                <div class="carousel-item active" >
                  <img src="/poster_image/{{ $dp->image }}" class="d-block w-100" alt="...">
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

{{-- Mie Instan --}}
    <div class="container mt-5 mb-5 ">
        <div class="container d-flex justify-content-between">
            <h5>Mie Instan</h5>
            <a href="/products/category/mie-instan" class="link-underline link-underline-opacity-0"><p style="color: #68B984;">Lihat Selengkapnya</p></a>
        </div>
        <div class="container d-flex justify-content-start w-100 mt-2">
            <div class="row d-flex justify-content-start">
                @forelse ($mieinstan as $dmi)
            <div class="col mt-3">
                <a href="/product/{{ $dmi->id }}" class="text-decoration-none">
                    <div class="card shadow" style="width: 12.4rem; height: 17rem; cursor: pointer;">
                        <img src="/products_image/{{ $dmi->image }}" class="card-img-top object-fit-cover" style="width: 100%; height: 50%;" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-weight: 400;">{{ $dmi->name }}</p>
                             <h4 class="card-title" style="font-weight: 600;">{{  $convertToRupiah = "Rp" . number_format($dmi->price, 0, ',', '.') }}</h4>
                        </div>
                    </div>
                </a>
                </div>
                @empty
                @endforelse
        </div>
    </div>
</div>
        
{{-- Minyak Goreng --}}
    <div class=" container mt-5 mb-5">
        <div class="container d-flex justify-content-between">
            <h5>Minyak Goreng</h5>
            <a href="/products/category/minyak-goreng" class="link-underline link-underline-opacity-0"><p style="color: #68B984;">Lihat Selengkapnya</p></a>
        </div>
        <div class="container-fluid d-flex  justify-content-start w-100 mt-2">
            <div class="row d-flex flex-row justify-content-start">
                @forelse ($minyakgoreng as $dmg)
                <div class="col mt-3">
                    <a href="/product/{{ $dmg->id }}" class="text-decoration-none">
                    <div class="card shadow" style="width: 12.4rem; height: 17rem; cursor: pointer;">
                        <img src="/products_image/{{ $dmg->image }}" class="card-img-top object-fit-cover" style="width: 100%; height: 50%; " alt="...">
                        <div class="card-body"> 
                            <p class="card-text" style="font-weight: 400;">{{ $dmg->name }}</p>
                            <h4 class="card-title" style="font-weight: 600;">{{ $convertToRupiah = "Rp" . number_format($dmg->price, 0, ',', '.') }}</h4>
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
