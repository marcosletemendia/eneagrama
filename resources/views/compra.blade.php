@extends('layouts.plantilla')
@section('titulo')
   Comprar Libro
@endsection

@section('principal')
  <div class="central">
    <h2>Elija el Metodo de Pago</h2>
    <div class="pago">
      <a href="/checkout/preferences"><img src="/img/mercadopago.jpg" alt=""></a>
      <a href="/paypal"><img src="/img/paypal.jpg" alt=""></a>
    </div>

  </div>
@endsection
