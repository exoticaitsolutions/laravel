<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
{
    $product = Product::find($id);
    return view('product', ['product' => $product]);
}
}
