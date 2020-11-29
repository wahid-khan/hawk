<?php

namespace App\billing;

interface PaymentGatewayContract
{
    public function setDiscount($amount);

    public function charge($amount);
}
