<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
  public function courses(){
    return $this->hasMany('App\Course');
  }
}
