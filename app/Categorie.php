<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	protected $primaryKey = 'slug';
	public $timestamps = false;    
}
