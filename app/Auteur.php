<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $table = 'auteurs';
    public $timestamps = false;
    protected $fillable = array('user_id', 'publication_id');

    public function publication()
    {
        return $this->belongsTo('App\Publication');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
