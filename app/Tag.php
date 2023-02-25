<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function task(){
        return $this->belongsToMany(Task::class);
    }
}
