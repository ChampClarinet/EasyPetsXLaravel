<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AvailablePet extends Model
{
    public function Shop(){
        return $this->hasOne('App\Model\Shop');
    }
}
