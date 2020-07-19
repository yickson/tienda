<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\OrderStatus
 *
 * @property int $id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderStatus whereValue($value)
 * @mixin \Eloquent
 */
class OrderStatus extends Model
{
    //
}
