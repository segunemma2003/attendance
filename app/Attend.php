<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attend extends Model
{
    protected $guarded=['id'];
    public function fellow()
    {
    	return $this->belongsTo('App\Fellows');
    }
}
