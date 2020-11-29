<?php

namespace App\billing;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\This;

class BankPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;
    
    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    
    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount)
    {
        //charges for banks
        
        return
        [
            'Payment_type' => 'BANK',
            'currency' => $this->currency,
            'amount' => $amount,
            'discount' => $this->discount,
            'GrossAfterDiscount' => $amount - $this->discount,
            'NetAmount' => ($amount - $this->discount),
            'card_number' => Str::random(),
        ];
    }
}
