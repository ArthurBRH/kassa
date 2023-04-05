<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $money = Money::find('1')->amount;
        return view('checkout/checkout', ['money' => $money,]);
    }
}
