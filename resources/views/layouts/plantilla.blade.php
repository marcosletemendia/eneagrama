<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/baa6d0d275.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Satisfy|Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>@yield('titulo')</title>
  </head>
  <body>
    <header>
      <nav>
        <a id="logo" href="/home"><img src="/img/logo.jpg" alt="Logo"></a>
        <div class="logo">
          <i class="fas fa-bars" id='subnavbtn2'></i>
          <div class="enlaces">
            <div class="a">
              <button class="subnavbtn"><p> ENEATIPOS</p></button>
              <div class='subnav-content'>
                <a href="/mirarme/eneatipo1"> <p>El UNO - El Idealista</p></a>
                <a href="/mirarme/eneatipo2"><p>El DOS - El que da</p></a>
                <a href="/mirarme/eneatipo3"><p>El TRES - El exitoso</p></a>
                <a href="/mirarme/eneatipo4"><p>El CUATRO - El creativo</p></a>
                <a href="/mirarme/eneatipo5"><p>El CINCO - El observador</p></a>
                <a href="/mirarme/eneatipo6"><p>El SEIS - El confiable</p></a>
                <a href="/mirarme/eneatipo7"><p>El SIETE - El optimista</p></a>
                <a href="/mirarme/eneatipo8"><p>El OCHO - El líder</p></a>
                <a href="/mirarme/eneatipo9"><p>El NUEVE - El pacificador</p></a>
              </div>
            </div>
            <div class="a">
                <button class="subnavbtn"><p>MIS COMPLEMENTOS</p></button>
                <div class='subnav-content'>
                  <a href="/mirar_al_mundo/alas/alas"><p>ALAS</p></a>
                  <a href="/mirar_al_mundo/brazos/brazos"><p>BRAZOS</p></a>
                  <a href="/mirar_al_mundo/ciegos/ciegos"><p>PUNTOS CIEGOS</p></a>
                  <a href="/mirar_al_mundo/ejes/ejes"><p>EJES</p></a>
                </div>
            </div>
            <div class="a">
              <button class="subnavbtn"><p>EL COMIENZO</p> </button>
              <div class='subnav-content'>
                <a href="/herida"> <p>EXPERIENCIA INTRAUTERINA- HERIDA PRIMARIA</p></a>
                <a href="/vincularidad"><p>CENTROS ENERGÉTICOS  - MECANISMO DE VINCULARIDAD</p></a>
                <a href="/energia"><p>FOCO DE LA ENERGÍA - MANEJO DE LA ENERGÍA</p></a>
                <a href="/distintiva"><p>NECESIDAD DISTINTIVA:</p></a>
              </div>
            </div>
            <div class="a">
              <button class="subnavbtn"><p>CAMINOS</p> </button>
              <div class='subnav-content'>
                <a href="/alejamiento/alejamiento"> <p>ALEJAMIENTO DE SI MISMO</p></a>
                <a href="/encuentro"><p>ENCUENTRO CONSIGO</p></a>
              </div>
            </div>
            <div class="a">
              <button class="subnavbtn"> <p> MISION DE VIDA</p> </button>
              <div class='subnav-content'>
                <a href="recibir1"> <p>RECIBIR</p></a>
                <a href="dar1"><p>DAR</p></a>
                <a href="final"> <p> AL FINAL DEL CAMINO </p></a>
              </div>
            </div>

            </div>
          </div>
        </div>
      </nav>
    </header>
    <section>

      <div class="test">
        <h1><a href="/pag1t">Test de Eneatipo</a></h1>
      </div>
      @yield('principal')

      <div class="test">
        <h1><a href=@php if (Auth::check()){
        if (Auth::user()->collection_status==NULL ) {
          echo '/compra';
        } else{
          echo '/download';
        }
      }else{
        echo "/auth/login";
      }

        @endphp>Comprar el libro</a></h1>
      </div>
    </section>

    <script src='/js/prueba.js'>

    </script>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
