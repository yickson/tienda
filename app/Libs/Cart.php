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

    public function formatItem(Product $product, int $quantity)
    {
        return [
            'productId' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'amount' => $quantity * $product->price
        ];
    }

    public function addItem(Product $product, int $quantity)
    {
       if (!empty($this->items)) {
           if ($this->existsItem($product->id)) {
               $this->updateItem($product, $quantity);
               $this->getTotalItems();
               $this->getTotalAmount();
               return true;
           }
       }

       $item = $this->formatItem($product, $quantity);
       array_push($this->items, $item);
       $this->getTotalItems();
       $this->getTotalAmount();
       return true;
    }

    /**
     * Update quantity and amount in product item
     * @param Product $product
     * @param int $quantity
     * @return bool
     */
    public function updateItem(Product $product, int $quantity)
    {
        foreach ($this->items as $key => &$item) {
            if ($item['productId'] === $product->id) {
                $item['quantity'] += $quantity;
                if ($item['quantity'] <= 0) {
                    $this->deleteItem($product->id);
                    return true;
                } else {
                    $item['amount'] += $quantity * $product->price;
                    return true;
                }
            }
        }
    }

    /**
     * @param $productId
     * @return bool
     */
    public function deleteItem($productId)
    {
        foreach ($this->items as $key => $item) {
           if ($item['productId'] == $productId) {
               $this->getTotalAmount();
               $this->getTotalItems();
               unset($this->items[$key]);
           }
        }

        return true;
    }

    /**
     * @return bool
     * Delete all items of cart
     */
    public function deleteAllItems()
    {
        $this->items = [];
        return true;
    }

    /**
     * Generate Unique Id Object Cart
     * @return string
     */
    public function generateCartId()
    {
        return md5(env('APP_KEY').uniqid('store'));
    }

    /**
     * Total amount by each items
     */
    public function getTotalAmount()
    {
        $this->totalAmount = 0;
        foreach ($this->items as $item) {
            $this->totalAmount += $item['amount'];
        }
        return $this->totalAmount;
    }

    /**
     * Total items by all products
     */
    public function getTotalItems()
    {
        $this->totalItems = 0;
        foreach ($this->items as $item) {
            $this->totalItems += $item['quantity'];
        }
    }

    /**
     * @param $productId
     * @return bool
     * Verify item in array of items
     */
    public function existsItem(int $productId)
    {
        foreach ($this->items as $item) {
            print_r($item['productId'], $productId);
            if ($item['productId'] == $productId) {
                return true;
            }
        }

        return false;
    }
}