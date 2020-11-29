<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    // public function store() if i dont define objects i.e i have to define in a functiion
    //AND note that I have 2 currencies

    public function store(PaymentGateway $paymentGateway)
    {
        //$paymentGateway = new PaymentGateway('usd', 'PKR'); this is loong method i.e define in store function


        dd($paymentGateway->charge('2500'));
    }
}
