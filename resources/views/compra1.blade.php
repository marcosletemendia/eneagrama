@extends('layouts.plantilla')
@section('titulo')
   Comprar Libro
@endsection

@section('principal')
  <div class="central">
    <h2>Vista Previa</h2>
    <div class="pago1">
        <img id="imgpago"src="/primera_pagina_libro.jpg" alt="">
      {{-- BOTON DE CHECKOUT --}}
      <div class="botonpago">
        <form action="/success" method="post">
          @csrf
          <script
           src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
           data-preference-id="{{$preference->id}}">
          </script>
        </form>
      </div>

      {{-- BOTON DE PAGO --}}
      {{-- <div class="botonpago">
        <form action="/success" method="post">
          @csrf
          <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
          data-preference-id="379504438-252147f2-3feb-4938-adf4-194434dd07ff">
          </script>
        </form>
      </div> --}}

    </div>
  </div>
@endsection
