<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CartController extends Controller
{
    public function addToCart()
    {
        return view('website.cart.add-cart');
    }

    public function cart()
    {
        return view('website.cart.cart');
    }
}
