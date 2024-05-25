<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        return view('frontend.cart.index', compact('cart'));
    }

    public function add($id)
    {
    
    }
}
