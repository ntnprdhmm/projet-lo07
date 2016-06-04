<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $table = 'auteurs';
    public $timestamps = false;

    public function publication()
    {
        return $this->belongsTo('App\Publication');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
