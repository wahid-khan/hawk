<?php

namespace App\billing;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\This;

class PaymentGateway
{
    private $currency;
    private $local_currency;

    public function __construct($currency, $local_currency)
    {
        $this->currency = $currency;
        $this->local_currency = $local_currency;
    }

    

    public function charge($amount)
    {
        //charges for banks
        
        return
        [
            'amount' => $amount,
            'card_number' => Str::random(),
            'currency' => $this->currency,
            'local_currency' => $this->local_currency,
        ];
    }
}

?>