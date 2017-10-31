<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function center(){
      return $this->belongsTo('App\Center');
    }
}
