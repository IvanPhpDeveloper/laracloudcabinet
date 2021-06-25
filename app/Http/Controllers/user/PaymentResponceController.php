<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\PaymentResponce;
use Illuminate\Http\Request;

class PaymentResponceController extends Controller
{

    public function index(Request $request)
    {
        $responce=jsone_decode($request->all());

     PaymentResponce::create([
           'currency'=>$responce->currency,
         'actual_amount'=>$responce->actual_amount,
         'order_status'=>$responce->order_status,
         'response_status'=>$responce->response_status,
         'order_time'=>$responce->order_time,
         'actual_currency'=>$responce->actual_currency,
         'order_id'=>$responce->order_id,
         'payment_id'=>$responce->payment_id,
         'signature'=>$responce->signature,
     ]);

    }
}
