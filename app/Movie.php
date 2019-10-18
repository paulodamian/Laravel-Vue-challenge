<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    
    public function crews() {
        return $this->hasMany('App\Crew');
    }
}
