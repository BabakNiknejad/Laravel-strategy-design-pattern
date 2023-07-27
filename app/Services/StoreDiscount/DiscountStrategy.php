<?php

namespace App\Services\StoreDiscount;

interface DiscountStrategy
{
    public function applyDiscount($amount);
}
