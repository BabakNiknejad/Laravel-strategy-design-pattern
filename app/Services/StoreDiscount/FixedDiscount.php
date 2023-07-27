<?php

namespace App\Services\StoreDiscount;

class FixedDiscount implements DiscountStrategy
{
    protected $discountType;

    public function __construct($discountType)
    {
        $this->discountType = $discountType;
    }

    public function applyDiscount($amount)
    {
        return $amount - $this->discountType;
    }
}
