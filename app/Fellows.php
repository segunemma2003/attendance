<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fellows extends Model
{
        protected $guarded=['id'];
    public function attend()
    {
    	return $this->hasMany('App\Attend');
    }
}
