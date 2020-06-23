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
                src="https://www.paypal.com/sdk/js?client-id=AYYzVmM0Ssog0WtLAJFerJ6JWkBe7x7esy8h2epcoobAn_HBR2BD3s1wK2WSLf0Sjo8D6Khr6mOYnkLy"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
              </script>
              <div id="paypal-button-container"></div>
                <script>
                  paypal.Buttons({
                    createOrder: function(data, actions) {
                      // This function sets up the details of the transaction, including the amount and line item details.
                      return actions.order.create({
                        purchase_units: [{
                          amount: {
                            value: '5.00'
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
            {{-- BOTON DE CHECKOUT CON OBJETOS--}}
            {{-- <form action="/success" method="post">
              @csrf
              <script
               src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
               data-preference-id="{{$preference->id}}">
              </script>
            </form> --}}

            {{-- BOTON DE PAGO JAQUIE--}}
            <form action="/success" method="post">
              @csrf
              <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
              data-preference-id="247338821-82fd7a48-b612-4e39-8c80-a0e1d43cf73f">
              </script>
            </form>



            {{-- BOTON DE PAGO MIO PROBANDO--}}
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
