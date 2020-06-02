@extends('layouts.plantilla')
@section('titulo')
   Comprar Libro
@endsection

@section('principal')
  <div class="central">
    <h2>Vista Previa</h2>
    <div class="pago">

      {{-- BOTON DE PAGO --}}
      <form action="/success" method="post">
        @csrf
        <script
         src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
         data-preference-id="{{$preference->id}}">
        </script>
      </form>


      <iframe src="/primera_pagina_libro.pdf" width="" height=""></iframe>
      <img src="/primera_pagina_libro.jpg" alt="">


    </div>
  </div>
@endsection
