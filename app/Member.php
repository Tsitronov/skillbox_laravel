<?php

namespace App;

//use Illuminate\Database\Eloquent\Model - perche nuova Model;

class Member extends Model
{
    public $timestamps = false;

    public function getRouteKeyName(){
        return 'nome';
    }
}
