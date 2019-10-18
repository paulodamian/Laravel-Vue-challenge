<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
