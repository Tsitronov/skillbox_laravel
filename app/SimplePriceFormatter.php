<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class SimplePriceFormatter  extends Model implements PriceFormatter
{
    public function format($value)
    {
        return $value. ' euro';
    }
}
