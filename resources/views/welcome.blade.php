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
<body>
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
                    <a class="nav-link" href="{{url('/profesionales')}}" role="button" >
                      Profesionales
                    </a>
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
  
      <div class="container mt-4">
        <div class="d-flex justify-content-center align-items-center vh-80">

            <div id="carouselExample" class="w-50 carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active ">
                    <img src="{{asset('assets/image.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/image2.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/image3.jpg')}}" class="d-block w-100" alt="..." w>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <h2>Experiencia Odontológica</h2>
      <blockquote>
        En <strong>DentiGlow</strong>, nos enorgullece ser una clínica dental con una rica trayectoria en el cuidado bucal. Durante [número de años] años, hemos sido un referente en proporcionar servicios odontológicos de calidad y atención personalizada a nuestra apreciada comunidad.
      </blockquote>
      <h2>¿Qué nos hace únicos?</h2>
      <ul>
        <li>
            Equipo de Expertos: Contamos con un equipo altamente calificado de dentistas y profesionales de la salud dental que tienen años de experiencia en diversas especialidades odontológicas.
        </li>
        <li>Tecnología de Vanguardia: Nos mantenemos a la vanguardia de las últimas tecnologías dentales para garantizar tratamientos precisos, eficientes y cómodos para nuestros pacientes.</li>
        <li>
            Enfoque Personalizado: Reconocemos que cada sonrisa es única. Nuestro enfoque personalizado nos permite diseñar planes de tratamiento adaptados a las necesidades específicas de cada paciente.
        </li>
        <li>
            Ambiente Cálido y Acogedor: Creemos que una experiencia dental positiva comienza desde el momento en que entras por nuestras puertas. Nuestro equipo se esfuerza por crear un ambiente cálido y acogedor para que te sientas cómodo y relajado.
        </li>
    </ul>
    <h2  id="servicios"> Servicios que Ofrecemos:</h2>
    <div class="row row-cols-1 row-cols-md-5 g-4 mt-2"  style="max-width: 100%">
        @foreach ($datos as $servicio)
            
                <div class="card m-2" style="width: 18rem; background-color:var(--color-card)">
                    <div class="card-body">
                        <h5 class="card-title">{{$servicio->nombre}} </h5>
                        <p class="card-text">{{$servicio->descripcion}} </p>
                        <strong class="btn btn-primary">{{$servicio->tarifa}} bs </strong>
                    </div>
                </div>
            
        @endforeach
    </div>
    <div class="card text-dark  mb-3" style="max-width: 100%; background-color: #cbe3ff" >
        <div class="card-header"><h3>Confía en Nosotros</h3> </div>
        <div class="card-body">
          <h5 class="card-title">Tu salud denta es importante</h5>
          <p class="card-text">
            <blockquote>
                <p>Ya sea que necesites una limpieza de rutina, tratamiento ortodóncico o restauración dental, en [Nombre de la Clínica Dental], estamos comprometidos a brindarte un servicio excepcional y resultados duraderos.
                    </p> 
        
                <p>¡Únete a nuestra familia dental y descubre la diferencia de una atención centrada en la experiencia y la excelencia odontológica!
                    </p>
                <p>
                    Contáctanos hoy para programar tu cita. Tu sonrisa es nuestra prioridad.
                </p>
                
                
                <cite> Atentamente, <strong>DentiGlow</strong> </cite>
            </blockquote>
          </p>
        </div>
      </div>
    
      </div>
<footer class="bg-dark text-light py-3">
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