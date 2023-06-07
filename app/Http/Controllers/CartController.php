<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Jackiedo\Cart\Facades\Cart;

class CartController extends Controller
{
    public function add(Request $request)
    {
      $product = Product::find($request->product_id);
      $shoppingCart = Cart::name('shopping');
      $shoppingCart->addItem([
        'id' => $product->id,
        'title' => $product->name,
        'price' => (int) $request->quantity,
        'quantity' =>$product->price /100,

      ]);
      return back();
    }
    public function show()
    {
        return view('cart');
    }
      
}

