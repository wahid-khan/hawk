<?php

namespace App\Orders;

use App\billing\PaymentGatewayContract;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $bankpaymentGateway)
    {
        $this->bankpaymentGateway = $bankpaymentGateway;
    }
    
    public function all()
    {
        $this->bankpaymentGateway->setDiscount(500);

        return 
        [
            'name' => 'wahid',
            'address' => 'Undefined',
        ];
    }
}
