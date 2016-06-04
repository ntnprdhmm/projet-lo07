<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	protected $table = 'categories';
	protected $primaryKey = 'slug';

	public $timestamps = false;
	public $incrementing = false;

	/**
	 * Publications de cette categorie.
	 */
	public function publications()
	{
		return $this->hasMany('App\Publication');
	}
}
