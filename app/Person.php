<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function aliases() {
        return $this->hasMany('App\Alias');
    }

    public function movies() {
        return $this->hasManyThrough('App\Movie', 'App\Crew');
    }
}
