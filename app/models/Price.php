<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = [''];

    public function product()
    {
        return $this->belongsTo('App/Models/Product', 'product_id');
    }
}
