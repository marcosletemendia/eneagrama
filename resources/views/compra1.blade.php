@extends('layouts.plantilla')
@section('titulo')
   Comprar Libro
@endsection

@section('principal')
  <div class="central">
    <h2>Vista Previa</h2>
    <div class="pago">

      {{-- BOTON DE PAGO --}}
      <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
      data-preference-id="227294504-0e47e8e7-d234-466f-9356-29fb18341cea">
      </script>


    </div>
  </div>
@endsection
