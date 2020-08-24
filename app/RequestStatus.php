<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestStatus extends Model
{
    public function transactions()
    {
    	return $this->hasMany('App\Transaction');
    }
}
