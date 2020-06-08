@extends('layouts.plantilla')
@section('titulo')
   Comprar Libro
@endsection

@section('principal')
  <div class="central">
    <h2>Vista Previa</h2>
    <div class="pago1">
        <img id="imgpago"src="/primera_pagina_libro.jpg" alt="">
        <div class="botonpago">
          @if (@isset($pago))
            <form class="" action="/success/paypal" method="post">
              @csrf
              <script
                src="https://www.paypal.com/sdk/js?client-id=ASGg1lzHNt1nuJ8loyWYr3_v97DpVxh3c5bQIq5fknSgrWjsGJODIISgN2o-Jpp6FF_1TaNF87HVrTcz"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
              </script>
              <div id="paypal-button-container"></div>
                <script>
                  paypal.Buttons({
                    createOrder: function(data, actions) {
                      // This function sets up the details of the transaction, including the amount and line item details.
                      return actions.order.create({
                        purchase_units: [{
                          amount: {
                            value: '10.00'
                          }
                        }]
                      });
                    },
                    onApprove: function(data, actions) {
                      // This function captures the funds from the transaction.
                      return actions.order.capture().then(function(details)
                      {
                        // This function shows a transaction success message to your buyer.
                        // alert('Transaction completed by ' + details.payer.name.given_name);
                        return window.location.replace('/success/paypal');
                      });
                    }
                  }).render('#paypal-button-container');
                  // This function displays Smart Payment Buttons on your web page.
                </script>

            </form>

          @else
            {{-- BOTON DE CHECKOUT --}}
            <form action="/success" method="post">
              @csrf
              <script
               src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
               data-preference-id="{{$preference->id}}">
              </script>
            </form>


            {{-- BOTON DE PAGO --}}
            {{-- <div class="botonpago">
              <form action="/success" method="post">
                @csrf
                <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                data-preference-id="379504438-252147f2-3feb-4938-adf4-194434dd07ff">
                </script>
              </form>
            </div> --}}

          @endif
        </div>



    </div>
  </div>
@endsection
