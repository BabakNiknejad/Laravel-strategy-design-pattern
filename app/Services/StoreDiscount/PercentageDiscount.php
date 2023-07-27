<?php

namespace App\Services\StoreDiscount;

class PercentageDiscount implements DiscountStrategy
{
    protected $percentage;
    public function __construct($percentage)
    {
        $this->percentage = $percentage ;
    }

    public function applyDiscount($amount)
    {
       return $amount * (1 - $this->percentage/100);
    }
}
