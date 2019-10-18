<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    protected $hidden = ['created_at', 'updated_at', 'id', 'person_id'];

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
