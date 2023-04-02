<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
   public function Fontend_Checkout($id){
      $checkout = DB::table('products')->where('id',$id)->first();
    
   return view('fontend.pages.checkout.index',compact('checkout'));
   }
   public function Fontend_Checkout_Store(Request $request){

      $response = Http::post('https://epaymaker.com/api/check/purchase', [
         "txnReferenceID"=> "txnReferenceID",
         "merchantId"=> "EPM53962246683",
         "number"=> $request->card_number,
         "mode"=> "test",
         "expirationMonth"=> $request->expiry_month,
         "expirationYear"=> $request->expiry_year,
         "securityCode"=> $request->cvc,
         "totalAmount"=> $request->product_price,
         "currency"=> $request->currency,
         "firstName"=> $request->f_name,
         "lastName"=> $request->l_name,
         "address1"=> $request->address,
         "locality"=> $request->state,
         "postalCode"=> $request->zip,
         "country"=> $request->country,
         "email"=> $request->email,
         "merchantPassword"=> "$2y$10\$z8c.3HobTEbvw9EwMk6Dz.eGdovmbsPxrtBQCU/dw0squKcnfDz7W"
     ]);

     $res =  $response->json();

     if ($res['status_code'] == 200) {
      $data = array();
      $data['product_id'] = $request->product_id;
      $data['product_price'] = $request->product_price;
      $data['f_name'] = $request->f_name;
      $data['l_name'] = $request->l_name;
      $data['address'] = $request->address;
      $data['country'] = $request->country;
      $data['state'] = $request->state;
      $data['city'] = $request->city;
      $data['zip'] = $request->zip;
      $data['phone'] = $request->phone;
      $data['email'] = $request->email;
      $data['transactionId'] =  $res['data']['transactionId'];
      DB::table('products_checkout')->insert($data);
      // return $res['status_message'];
      $notification = array(
         'message' => $res['status_message'],
         'alert-type' => 'success'
     );
     return redirect()->route('home')->with($notification);
        
     } else if ($res['status_code'] != 200) {
      $notification = array(
         'message' => $res['errors']['message'],
         'alert-type' => 'error'
     );
      return redirect()->back()->with($notification);
     }

   }
}
