<?php
// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $user = Auth::user();

        $cartItem = Cart::where('product_id', $request->product_id)
           // ->where('user_id', $user->id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            $cartItem = Cart::create([
                'product_id' => $request->product_id,
              //  'user_id' => $user->id,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }
}
