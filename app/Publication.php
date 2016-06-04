<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';

	public $timestamps = false;

    public function auteurs()
    {
        return $this->hasMany('App\Auteur')->orderBy('position')->with('user');
    }

    public function categorie()
    {
        return $this->hasOne('App\Categorie', 'slug', 'categorie_id');
    }
}
