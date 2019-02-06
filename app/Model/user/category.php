<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function products()
    {
    	return $this->belongsToMany('App\Model\user\product','category_products');
    }
}
