<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentManagerController extends Controller
{
    public function index(){
        return view('admin.admin-payment.admin-payment');
    }
}
