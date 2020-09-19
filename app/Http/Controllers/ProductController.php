<?php

namespace App\Http\Controllers;

use App\Libs\Cart;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.product');
    }

    public function list_product()
    {
        $product = Product::where('active', 1)->get();
        return response()->json($product);
    }

    public function addProduct(Request $request)
    {
        //dd($request->all());
        $product = Product::find($request->product);
        $quantity = $request->quantity;

        if(empty(session('cart'))) {
            $cart = new Cart();
        } else {
            $cart = session('cart');
        }
        $cart->addItem($product, $quantity);
        session(['cart' => $cart]);
        return response()->json($cart);
    }

    public function cartProduct()
    {
        $cart = session('cart');
        return response()->json($cart);
    }
}
