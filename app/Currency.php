<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Currency
 *
 * @property int $id
 * @property string $name
 * @property string $symbol
 * @property string $iso_code
 * @property int $decimals
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Currency whereDecimals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Currency whereIsoCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Currency whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Currency extends Model
{
    //
}
