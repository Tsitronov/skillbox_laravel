<?php

namespace App;

//use Illuminate\Database\Eloquent\Model - perche nuova Model;

class Task extends Model
{
    public $timestamps = false;

    public function getRouteKeyName(){
        return 'id';
    }

    public function steps(){
        return $this->hasMany(Step::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function addStep($attributes){
        $attributes['task_id']=$this->id;
        return $this->steps()->create($attributes);
    }
}
