<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function product()
    {
        return $this->hasMany(Product::class);
    }   
}
