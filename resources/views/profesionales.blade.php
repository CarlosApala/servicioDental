<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Clinica-Carlos</title>
    <style>
        :root{
            --color-card:#88d7f3
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">DentiGlow
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" >
                      Profesionales
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-disabled="true">Productos</a>
                  </li>
            </ul>
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
          </div>
        </div>
      </nav>
  
      
    <div class="row row-cols-1 row-cols-md-5 g-4 mt-2"  style="max-width: 100%">
        @foreach ($datos as $servicio)
            
        <div class="card m-4" style="width: 18rem;">
          <img src="assets/image8.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$servicio->especialidad}}</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Nombre:</strong> {{$servicio->name}}</li>
            
          </ul>
        </div>
            
        @endforeach
    </div>
    
<footer class="bg-dark text-light py-3 mt-auto" >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Contacto</h5>
                <p>Dirección: {{fake()->address}}</p>
                <p>Teléfono: {{fake()->phoneNumber}}</p>
                <p>Email: {{fake()->email}} </p>
            </div>
            <div class="col-md-6 text-md-right">
                <h5>Síguenos</h5>
                <a href="#" class="text-light">Facebook</a> |
                <a href="#" class="text-light">Twitter</a> |
                <a href="#" class="text-light">Instagram</a>
            </div>
        </div>
        
    </div>
    


</footer>
</body>
<script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</html>

