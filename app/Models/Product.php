<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = true;

    protected $fillable = [
        'name', 'price', 'rating', 'quantity',
    ];
}
