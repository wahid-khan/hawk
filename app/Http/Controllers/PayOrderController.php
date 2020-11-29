<?php

namespace App\Http\Controllers;


use App\Orders\OrderDetails;
use Illuminate\Http\Request;
use App\billing\PaymentGatewayContract;

class PayOrderController extends Controller
{
    // public function store() if i dont define objects i.e i have to define in a functiion
    //AND note that I have 2 currencies

    public function store(PaymentGatewayContract $paymentGatewayContract, OrderDetails $orderDetails)
    {
        // $bankpaymentGateway = new BankPaymentGateway('usd','PKR');

        $order = $orderDetails->all();

        dd($paymentGatewayContract->charge('2500'));
    }
}
