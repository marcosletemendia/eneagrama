@extends('layouts.plantilla')
@section('titulo')
   Comprar Libro
@endsection

@section('principal')
  <div class="central">
    <h2>Elija el Metodo de Pago</h2>
    <div class="pago">
      <a href="/checkout/preferences"><img src="/storage/mercadopago.jpg" alt="">mp</a>
      <a href="/paypal"><img src="/storage/paypal.jpg" alt="">paypal</a>
    </div>

  </div>
@endsection
