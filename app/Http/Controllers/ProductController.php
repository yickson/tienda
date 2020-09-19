<?php

namespace App\Http\Controllers;

use App\Libs\Cart;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.products');
    }

    public function show($product_id)
    {
        return view('frontend.product', ['product' => $product_id]);
    }

    public function getProduct($product_id)
    {
        $product = Product::find($product_id);
        return response()->json($product);
    }

    public function list_product()
    {
        $product = Product::where('active', 1)->take(9)->get();
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

    public function cartProduct()
    {
        $cart = session('cart');
        return response()->json($cart);
    }
}
