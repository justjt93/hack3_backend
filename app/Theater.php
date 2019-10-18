<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    public function screenings()
    {
        return $this->hasMany('App\Screening');
    }

    public function movies()
    {
        return $this->hasOne('App\Movie');
    }
}
