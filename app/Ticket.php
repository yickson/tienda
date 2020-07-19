<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Ticket
 *
 * @property int $id
 * @property int $user_id
 * @property int $order_id
 * @property string $reference
 * @property float $amount
 * @property int $quantity_items
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereQuantityItems($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereUserId($value)
 * @mixin \Eloquent
 */
class Ticket extends Model
{
    //
}
