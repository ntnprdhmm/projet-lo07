<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
	public $timestamps = false;
public function users()
    {
        return $this->hasManyThrough('App\User', 'App\Auteur',);
    }
}
