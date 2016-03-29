<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public  function casts()
    {
        return $this->hasMany('App\Cast')->get();
    }

}
