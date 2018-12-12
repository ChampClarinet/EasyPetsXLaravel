<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function Shop(){
        return $this->hasOne('App\Model\Shop');
    }
    public function Review(){
        return $this->hasMany('App\Model\Reply');
    }
}
