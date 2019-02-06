<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function products()
    {
    	return $this->belongsToMany('App\Model\user\product','product_tags');
    }
}
