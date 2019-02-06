<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function categories()
    {
    	return $this->belongsToMany('App\Model\user\category','category_products');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Model\user\tag','product_tags');
    }
}
