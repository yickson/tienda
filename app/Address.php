<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Address
 *
 * @property int $id
 * @property int $user_id
 * @property int $country_id
 * @property int $state_id
 * @property int $province_id
 * @property int $address_type_id
 * @property string $city
 * @property string $address
 * @property int $number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereAddressTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereUserId($value)
 * @mixin \Eloquent
 */
class Address extends Model
{
    //
}
