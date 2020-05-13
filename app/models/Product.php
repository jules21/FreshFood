<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function price()
    {
        return $this->hasOne('App\Models\Price', 'product_id');
    }
    public function photos()
    {
        return $this->hasMany('App\Models\Upload');
    }
}
