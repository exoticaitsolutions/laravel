<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{ViewCart};
use App\Models\Product;

class ViewCartController extends Controller
{
    public function index()
    {
        // $cart = ViewCart::get();
        // $product = Product::get();
        $products = Product::join('carts', 'product.id', '=', 'carts.product_id')
        ->join('carts AS c', 'carts.id', '=', 'c.id')
        ->select('product.*')
        ->get();
       return view('viewcart', ['products' => $products]);
    }
}
