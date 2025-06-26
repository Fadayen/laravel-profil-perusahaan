<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name',
        'location',
        'price_start',
        'price_end',
        'bedrooms',
        'bathrooms',
        'size',
        'status',
        'image',
        'description',
    ];
}
