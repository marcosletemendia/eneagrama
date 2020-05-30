<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MP;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;



class mercadoPagoController extends Controller
{
    public function createPreferencePayment()
    {

    \MercadoPago\SDK::setAccessToken('TEST-4741705164024221-102222-c082f40bb2a3c5f53ff35e01f9b82326-15015244'); //MARCELO

    // \MercadoPago\SDK::setAccessToken('TEST-6605144286056205-051715-aec7958b0801fb48a6d157f6084c294a-227294504'); //MIO

    // \MercadoPago\SDK::setAccessToken('TEST-1728498903924788-051923-00464845442ef0fdae447c2fe36ee998-349594482'); //GILO


    // Crea un objeto de preferencia
    $preference = new \MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new \MercadoPago\Item();
    $item->title = 'Ebook Eneagrama';
    $item->quantity = 1;
    $item->unit_price = 10;
    $item->currency = "ARS";
    $preference->items = array($item);
    $preference->notification_url = '';
    $preference->back_urls = array(
    "success" => URL('/succes'),
    );
    $preference->auto_return = "approved";

    $preference->save();

    return redirect($preference->init_point);
  }

  public function success(){

    // MIO
    $user = auth()->user();
    $user->compro = 1;

    //MARCELO
    // $id=auth()->user()->id;
    // $user=User::find($id);

    // var_dump($user);

    $user->save();

    return view('/download');
  }

  public function succes(){

    $id=auth()->user()->id;
    $user=User::find($id);

    // $user->transaction_id=$req['collection_id'];
    // $user->collection_status=$req['collection_status'];
    // $user->merchant_order_id=$req['merchant_order_id'];
    // $user->preference_id=$req['preference_id'];

    $user->compro = 1 ;

    $user->save();

    // $info=$req->request;

    return view('/download');


  }

}
