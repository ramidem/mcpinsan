<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    public function requestStatus()
    {
        return $this->belongsTo('App\RequestStatus');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function assets()
    {
        return $this->belongsToMany('App\Asset')
                    ->withTimestamps();
    }
}
