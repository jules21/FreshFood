<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $guarded = [''];

    public function product()
    {
        $this->belongsTo('App/Models/Product');
    }
}
