<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function aliases() {
        return $this->hasMany('App\Alias');
    }

    public function roles() {
        return $this->hasMany('App\Crew');
    }
}
