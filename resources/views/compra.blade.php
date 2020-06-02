@extends('layouts.plantilla')
@section('titulo')
   Comprar Libro
@endsection

@section('principal')

  @if (Auth::user()->collection_status=='approved')
    <div class="central">
      <div class="pago">
        <a class="btn btn-primary" href="/download" role="button">Descargar libro</a>
      </div>
    </div>
  @else
    <div class="central">
      <h2>Elija el Metodo de Pago</h2>
      <div class="pago">
        <a href="/checkout/mercadopago"><img src="/img/mercadopago.jpg" alt=""></a>
        <a href="/paypal"><img src="/img/paypal.jpg" alt=""></a>
      </div>
    </div>
  @endif
@endsection
