<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addtocart(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $cart = session()->get('cart', []);

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $cart[$id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'images' => $product->images 
            ];
        }
        session()->put('cart', $cart);
        return redirect()->route('view.cart')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');

    }
    public function viewcart()
    {
        $cart = session()->get('cart', []);
        return view('frontend.cart.main', compact('cart'));
    }
}
