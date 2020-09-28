<?php

namespace App\Http\Controllers;

use App\Libs\Cart;
use App\Libs\MyWebpay;
use App\Product;
use Illuminate\Http\Request;
use Transbank\Webpay\Exceptions\InvalidAmountException;

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
        $product = Product::select(['id', 'name', 'price'])->find($request->productId);
        $quantity = $request->quantity;
        $cart = $this->verifyCart();
        $cart->addItem($product, $quantity);
        session(['cart' => $cart]);

        return response()->json(['response' => true,  'cart' => $cart]);
    }

    public function delete()
    {
        $cart = $this->verifyCart();
        $cart->deleteAllItems();
        session(['cart' => $cart]);

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

    public function payCart()
    {
        $transaction = MyWebpay::getTransaction();

        $amount = 1000;
        // Identificador que será retornado en el callback de resultado:
        $sessionId = "ABCDEF";
        // Identificador único de orden de compra:
        $buyOrder = strval(rand(100000, 999999999));
        $returnUrl = "http://tienda.test:8091/transaction";
        $finalUrl = "http://tienda.test:8091/paymentFinal";
        try {
            $initResult = $transaction->initTransaction($amount, $buyOrder, $sessionId, $returnUrl, $finalUrl);
            $formAction = $initResult->url;
            $tokenWs = $initResult->token;
            return view('frontend.transaction', ['tokenWs' => $tokenWs, 'formAction' => $formAction]);
        } catch (InvalidAmountException $e) {
            return response()->json(['message' => 'Monto inválido', 'error' => $e->getMessage()]);
        }
    }

    public function transaction(Request $request)
    {
        dd($request->all());
        //return view('frontend.transaction');
    }

    public function paymentFinal()
    {

    }
}
