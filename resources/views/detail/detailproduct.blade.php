<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $product->name }} - Kelontong Market</title>
    <link rel="icon" href="{{ asset('/img/logo_sm.svg') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>
    @media (max-width: 767.98px) {
        .d-flex {
            flex-direction: column;
        }
     }
</style>

</head>
<body style="font-family: 'Work Sans', sans-serif;">
    
    @include('component.navbar')
    @yield('navbar')
    
    <div class="container pt-5 mt-5">
        <div class="d-flex justify-content-center mb-3">
            <img src="/products_image/{{ $product->image }}" class="card-img-top object-fit-cover" alt="..." style="width: 70vh; height: 60vh; ">
            <div class="container pt-5 ps-5">
                <div class="card-body"> 
                  <p class="card-title fs-3">{{ $product->name }}</p>
                  <h1 class="card-text">{{  $convertToRupiah = "Rp" . number_format($product->price, 0, ',', '.') }}</h1>
                  <p class="card-text"><small class="text-body-secondary">{{ $product->description }}</small></p>
                </div>  
            </div>
    </div>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>
</html>