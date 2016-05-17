<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
public function publication()
{
    return $this->belongsTo('App\Publication');
}
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
