<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
public  function index(){
    $products = Products::paginate(12);
    return view("frontend.master", compact(
        'products',
    ));
}
public function cart(){
    return view("frontend.cart.cart");
}
public function checkout(){
    return view ("frontend.cart.checkout");
}
public function product($id){

    $product = Products::findOrFail($id);
    $refProducts = Products::limit(4)->get();
    // dd($product);
    return view(
        'frontend.product.productsdetail', 
        compact('product', 'refProducts')
    );
}
public function shop(){
    $products = Products::paginate(15);
    return view("frontend.shop.shop", compact('products'));
}


}
