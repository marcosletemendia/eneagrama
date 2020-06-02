<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/baa6d0d275.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Satisfy|Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>@yield('titulo')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light shadow mb-5 rounded">
        <a id="logoa" class="navbar-brand" href="/home"> <img id="logo"src="/img/logo.jpg"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" data-hover="dropdown">
        <ul id="ul1" class="navbar-nav mr-auto">
          <li class="nav-item dropdown linav">
            <a class="nav-link nava" data-hover="dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p class="navp">ENEATIPOS</p>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/mirarme/eneatipo1">El UNO - El Idealista</a>
              <a class="dropdown-item" href="/mirarme/eneatipo2">El DOS - El que da</a>
              <a class="dropdown-item" href="/mirarme/eneatipo3">El TRES - El exitoso</a>
              <a class="dropdown-item" href="/mirarme/eneatipo4">El CUATRO - El Creativo</a>
              <a class="dropdown-item" href="/mirarme/eneatipo5">El CINCO - El Observador</a>
              <a class="dropdown-item" href="/mirarme/eneatipo6">El SEIS - El Confiable</a>
              <a class="dropdown-item" href="/mirarme/eneatipo7">El SIETE - El Optimista</a>
              <a class="dropdown-item" href="/mirarme/eneatipo8">El OCHO - El Lider</a>
              <a class="dropdown-item" href="/mirarme/eneatipo9">El NUEVE - El Pacificador</a>
          </li>
          <li class="nav-item dropdown linav">
            <a class="nav-link nava" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p class="navp">MIS COMPLEMENTOS</p>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/mirar_al_mundo/alas/alas">ALAS</a>
              <a class="dropdown-item" href="/mirar_al_mundo/brazos/brazos">BRAZOS</a>
              <a class="dropdown-item" href="/mirar_al_mundo/ciegos/ciegos">PUNTOS CIEGOS</a>
              <a class="dropdown-item" href="/mirar_al_mundo/ejes/ejes">EJES</a>
            <li class="nav-item dropdown linav">
              <a class="nav-link nava" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p class="navp">EL COMIENZO</p>
              </a>
              <div class="dropdown-menu" style="font-size: 95%;" aria-labelledby="navbarDropdown">
              <a class="dropdown-item arregloa" href="/herida"> EXPERIENCIA INTRAUTERINA - HERIDA PRIMARIA</a>
              <a class="dropdown-item arregloa" href="/vincularidad">CENTROS ENERGÉTICOS  - MECANISMO DE VINCULARIDAD</a>
              <a class="dropdown-item arregloa" href="/energia">FOCO DE LA ENERGÍA - MANEJO DE LA ENERGÍA</a>
              <a class="dropdown-item arregloa" href="/distintiva">NECESIDAD DISTINTIVA</a>
              </div>
            </li>
            <li class="nav-item dropdown linav">
              <a class="nav-link nava" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p class="navp">CAMINOS</p>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/alejamiento/alejamiento">ALEJAMIENTO DE SI MISMO</a>
                <a class="dropdown-item" href="/encuentro">ENCUENTRO CONSIGO</a>
              </div>
            </li>
            <li class="nav-item dropdown linav">
              <a class="nav-link nava" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p class="navp">MISION DE VIDA</p>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/recibir1">RECIBIR</a>
                <a class="dropdown-item" href="/dar1">DAR</a>
                <a class="dropdown-item" href="/final">AL FINAL DEL CAMINO</a>
              </div>
            </li>
        </ul>
      </div>
    </nav>
    <section>

      <div class="test">
        <h1><a href="/pag1t">Test de Eneatipo</a></h1>
      </div>
      @yield('principal')

      <div class="test">

        <h1>
          @if (Auth::user())
            @if (Auth::user()->collection_status=='approved')
              <a href="/download">Descargar el libro</a>
            @elseif (Auth::user()->collection_status==NULL)
              <a href="/compra">Comprar el libro</a>
            @endif
          @else
              <a href="/auth/login">Comprar el libro</a>
          @endif
        </h1>

        {{-- <h1><a href=@php if (Auth::check()){
        if (Auth::user()->collection_status==NULL ) {
          echo '/compra';
        } else{
          echo '/download';
        }
      }else{
        echo "/auth/login";
      }

        @endphp>Comprar el libro</a></h1>
 --}}

        @if (Auth::user())
          <a class="btn btn-danger" href="{{ route('logout') }}" role="button" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">Logout</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        @endif
      </div>
    </section>

    <script src='/js/prueba.js'>

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>
