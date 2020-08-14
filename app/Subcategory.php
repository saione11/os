<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
     protected $fillable=[
    	'name','photo'
    ];

    public function items($value='')
    {
    	return $this->hasMany('App\Item');
    }
}
