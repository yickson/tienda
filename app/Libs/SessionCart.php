<?php


namespace App\Libs;


class SessionCart
{
    public static function storageCart(Cart $cart)
    {
        return session(['cart', $cart]);
    }

    public static function deleteCart()
    {
        return session()->forget('cart');
    }
}