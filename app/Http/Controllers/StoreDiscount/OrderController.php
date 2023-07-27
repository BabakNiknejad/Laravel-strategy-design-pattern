<?php

namespace App\Http\Controllers\StoreDiscount;

use App\Http\Controllers\Controller;
use App\Services\StoreDiscount\FixedDiscount;
use App\Services\StoreDiscount\PercentageDiscount;

class OrderController extends Controller
{

    public function store()
    {
        $discountType = request()->input('discount_type');
        $amount = request()->input('amount');

        if ($discountType == 'percentage') {
            $discount = new PercentageDiscount(10);

        } elseif ('fixed') {
            $discount = new FixedDiscount(20000);

        } else {
            return response()->json(['message' => 'Invalid strategy'], 404);
        }

        $finalAmount = $discount->applyDiscount($amount);

        return response()->json(['finalAmount' => $finalAmount]);
    }
}
