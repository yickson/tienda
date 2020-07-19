<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TicketDetail
 *
 * @property int $id
 * @property int $ticket_id
 * @property int $user_id
 * @property int $product_id
 * @property int $quantity
 * @property float $price
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TicketDetail whereUserId($value)
 * @mixin \Eloquent
 */
class TicketDetail extends Model
{
    //
}
