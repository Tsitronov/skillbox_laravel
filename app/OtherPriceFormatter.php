<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class OtherPriceFormatter  extends Model implements PriceFormatter
{
    public function format($value)
    {
        return number_format($value, 2, '.', ' ') . ' euro';
    }
}
