<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MP;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;



class mercadoPagoController extends Controller
{

    public function comprar(){

      \MercadoPago\SDK::setAccessToken('TEST-4741705164024221-102222-c082f40bb2a3c5f53ff35e01f9b82326-15015244'); //MARCELO

      // \MercadoPago\SDK::setAccessToken('TEST-1728498903924788-051923-00464845442ef0fdae447c2fe36ee998-349594482'); //GILO

      $preference = new \MercadoPago\Preference();


      // Crea un ítem en la preferencia
      $item = new \MercadoPago\Item();
      $item->title = 'Ebook Eneagrama';
      $item->quantity = 1;
      $item->unit_price = 10;
      $item->currency_id = "ARS";
      $preference->notification_url = '';


      $preference->items = array($item);

      $preference->back_urls = array(
        "success" => URL('/success'),
      );
      $preference->auto_return = "approved";

      $preference->save();

      $vac = compact('preference');
      return view('/compra1', $vac);
      // return redirect($preference->init_point); ESTO HACIA QUE SE ABRA EL CHECKOUT DE UNA

    }

  public function success(Request $form){

    // dd($form);
    // MIO
    $user = auth()->user();
    $user->compro = 1;

    $user->preference_id=$form['preference_id'];
    $user->transaction_id=$form['payment_id'];
    $user->collection_status=$form['payment_status'];
    $user->merchant_order_id=$form['merchant_order_id'];


    // dd($user);

    $user->save();

    return view('/download');
  }
}
