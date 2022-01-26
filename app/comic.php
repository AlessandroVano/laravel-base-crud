<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    protected $fillable = [
      
        'title',
        'description',
        'type',
        'thumb',
        'price',
        'sale_date',
        'series'
    ];
}
