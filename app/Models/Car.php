<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Car
 *
 * @property $id
 * @property $brand
 * @property $model
 * @property $year
 * @property $chassis
 * @property $engine
 * @property $price
 * @property $state
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Car extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['brand', 'model', 'year', 'chassis', 'engine', 'price', 'state'];


}
