<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{

    protected $hidden = ['created_at', 'updated_at', 'person_id', 'movie_id', 'rol_id'];

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
