<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
   public function compra(){
     return view('compra');
   }

   public function comprarPaypal($pago){
     $vac = compact("pago");
     return view('/compra1', $vac);
   }

   public function success(){


     $user = auth()->user();
     $user->compro = 1;

     $user->preference_id='pago con paypal';
     $user->transaction_id= 123456789;
     $user->collection_status='approved';
     $user->merchant_order_id='pago con paypal';


     $user->save();

     return view('/download');



   }
}
