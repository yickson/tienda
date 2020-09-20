<?php

namespace App\Http\Controllers;

use App\Libs\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('frontend.cart');
    }

    public function show()
    {
        $cart = session('cart');
        return response()->json($cart);
    }

    public function update(Request $request)
    {
        $product = Product::find($request->productId);
        $quantity = $request->quantity;
        $cart = $this->verifyCart();
        $cart->addItem($product, $quantity);
        session(['cart' => $cart]);

        return response()->json($cart);
    }

    public function delete()
    {
        $cart = $this->verifyCart();
        $cart->deleteAllItems();
        return response()->json(true);
    }

    /**
     * @return Cart|\Illuminate\Contracts\Foundation\Application|\Illuminate\Session\SessionManager|\Illuminate\Session\Store|mixed
     */
    public function verifyCart()
    {
        if(empty(session('cart'))) {
            $cart = new Cart();
        } else {
            $cart = session('cart');
        }

        return $cart;
    }
}
