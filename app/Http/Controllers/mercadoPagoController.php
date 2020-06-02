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
    }


    public function createPreferencePayment()
    {

    // \MercadoPago\SDK::setAccessToken('TEST-4741705164024221-102222-c082f40bb2a3c5f53ff35e01f9b82326-15015244'); //MARCELO

    // \MercadoPago\SDK::setAccessToken('TEST-6605144286056205-051715-aec7958b0801fb48a6d157f6084c294a-227294504'); //MIO SANDBOX

    // \MercadoPago\SDK::setAccessToken('APP_USR-6605144286056205-051715-f445641f8478b40c291aba49ab4f32cd-227294504'); //MIO PRODUCCION

    \MercadoPago\SDK::setAccessToken('TEST-1728498903924788-051923-00464845442ef0fdae447c2fe36ee998-349594482'); //GILO


    // Crea un objeto de preferencia
    $preference = new \MercadoPago\Preference();

    $preference->back_urls = array(
      "success" => URL('/success'),
    );
    $preference->auto_return = "approved";


    // Crea un ítem en la preferencia
    $item = new \MercadoPago\Item();
    $item->title = 'Ebook Eneagrama';
    $item->quantity = 1;
    $item->unit_price = 10;
    $item->currency_id = "ARS";
    $preference->notification_url = '';


    $preference->items = array($item);
    $preference->save();

    return redirect($preference->init_point);
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



    $user->save();
    dd($user);

    return view('/download');
  }

  public function succes(){

    $id=auth()->user()->id;
    $user=User::find($id);

    $user->transaction_id=$req['collection_id'];
    $user->collection_status=$req['collection_status'];
    $user->merchant_order_id=$req['merchant_order_id'];
    $user->preference_id=$req['preference_id'];

    $user->save();

    // $info=$req->request;

    return view('/download');


  }

}
