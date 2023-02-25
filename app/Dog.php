<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public $timestamps = false;

    public function getRouteKeyName(){
        return 'nome';
    }
}
