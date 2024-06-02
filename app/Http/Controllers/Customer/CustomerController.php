<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class CustomerController extends Controller
{
public  function index(){
    $products = Products::paginate(12);
    return view("frontend.master", compact(
        'products',
    ));
}
public function product($id){
    $product = Products::findOrFail($id);
    $refProducts = Products::limit(4)->get();
    // dd($product);
    return view(
        'frontend.productdetail.productsdetail', 
        compact('product', 'refProducts')
    );
}
public function products(){
    $products = Products::paginate(15);
    return view("frontend.products.products", compact('products'));
}
public function blog(){
    return view("frontend.blog.blog");
}
public function contact(){
    return view("frontend.contact.contact");
}
}
