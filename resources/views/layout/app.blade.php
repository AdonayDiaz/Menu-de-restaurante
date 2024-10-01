<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap 5 CSS -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Aquí irá el título de cada página--}}
    <title>@yield('title')</title>
    <style>
      #navbar{
        background-color:rgb(61, 15, 160) !important;
      }
      .navbar-brand{
        color:black !important;
      }
      .dropdown-item:hover{
        color:blueviolet !important;
      }

    </style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
    </head>
<body>
        {{-- Nuestro menú --}}
        <nav id="navbar" class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Restaurante</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" databs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arialabel="Toggle 
        navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
        </li>

        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Menú
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <!-- Eliminamos el href y dejamos solo el evento del modal -->
        <li><a class="dropdown-item" href="/menu/create">Crear menú</a></li>
        <li><a class="dropdown-item" href="/menu/update">Actualizar menú</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="/menu/show">Mostrar</a></li>
    </ul>
</li>
<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  platos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/platos/create">Registrar plato</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/platos/show">Mostrar</a></li>
                </ul>
              </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pedidos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pedidos/create">Registrar pedido</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/pedidos/show">Mostrar</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Usuario
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/usuario/create">Registrar Usuario</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/usuario/show">Mostrar</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ingredientes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/ingredientes/create">Registrar ingrediente</a></li>
                  <li><a class="dropdown-item" href="/ingredientes/update">Actualizar ingrediente</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/ingredientes/show">Mostrar</a></li>
                </ul>
              </li>
              <!-- factura detalle -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Factura Detalle 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/ingredientes/create">Registrar Factura</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/ingredientes/show">Mostrar</a></li>
                </ul>
              </li>
        <!-- menu pago-->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pagos
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/ingredientes/create">Registrar Pago</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/ingredientes/show">Mostrar</a></li>
                  </ul>
              </li>
          <!-- menu Categoria Ingrediente-->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categoria Ingrediente
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/ingredientes/create">Registrar Categoria</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/ingredientes/show">Mostrar</a></li>
                  </ul>
              </li>
              </li>
          <!-- menu Reporte-->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Reporte
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/ingredientes/create">Registrar Reporte</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/ingredientes/show">Mostrar</a></li>
                  </ul>
              </li>
        </ul>
        </div>
        </div>
        </nav> 
        <div class="container-fluid">
        {{-- Aquí irá el contenido de todas las páginas --}}
        @yield('content') 
        @yield('scripts')
 </div> 
</body>
</html>