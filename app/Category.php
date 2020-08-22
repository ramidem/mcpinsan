<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function assetsLimited()
    {
        return $this->hasMany('App\Asset')->take(3);
    }

    public function assets()
    {
        return $this->hasMany('App\Asset');
    }
}
