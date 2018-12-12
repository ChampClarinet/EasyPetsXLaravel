<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function Review(){
        return $this->hasMany('App\Model\Review');
    }
}
