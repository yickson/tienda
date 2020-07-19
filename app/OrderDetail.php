<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\OrderDetail
 *
 * @property int $id
 * @property int $order_id
 * @property int $user_id
 * @property int $product_id
 * @property int $quantity
 * @property float $price
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderDetail whereUserId($value)
 * @mixin \Eloquent
 */
class OrderDetail extends Model
{
    //
}
