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
        $product = Product::find(3);
        return response()->json($product);
    }

    public function addProduct(Request $request)
    {
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
}
