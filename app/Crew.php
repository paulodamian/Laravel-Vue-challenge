<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }

    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }
}
