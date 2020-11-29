<?php

namespace App\billing;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\This;

class CreditPaymentGateway implements PaymentGatewayContract
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
        //charges for gst on credit
        $gst = $amount * 0.17;

        return
        [
            'Payment_type' => 'Credit',
            'currency' => $this->currency,
            'amount' => $amount,
            'discount' => $this->discount,
            'GrossAfterDiscount' => $amount - $this->discount,
            // 'tax_gst' => $amount * 0.17,
            'tax_gst' => $gst,
            'NetAmount' => ($amount - $this->discount) + $gst,
            'card_number' => Str::random(),
        ];
    }
}
