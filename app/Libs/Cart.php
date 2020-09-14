<?php


namespace App\Libs;


use App\Product;

class Cart
{
    /**
     * @var string
     * @description Id Unique
     */
    public $cartId;

    /**
     * @var array
     * @description Array of products
     */
    public $items = [];

    /**
     * @var int
     * @description Total amount of cart
     */
    public $totalAmount = 0;

    /**
     * @var int
     * @description Total Items include repeats items in cart
     */
    public $totalItems = 0;

    public function __construct()
    {
        $this->cartId = $this->generateCartId();
    }

    public function addItems(Product $product)
    {

    }

    public function updateItems($productId)
    {

    }

    public function deleteItems($productId)
    {

    }

    public function deleteAllItems()
    {

    }

    public function generateCartId()
    {
        return md5(env('APP_KEY').uniqid('store'));
    }
}