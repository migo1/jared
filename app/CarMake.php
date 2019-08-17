<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarMake extends Model
{
    protected $fillable = [
        'make'
    ];

    public function carmodels()
    {
        return $this->hasMany('App\CarModel');
    }
}
