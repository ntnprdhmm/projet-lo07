<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    protected $table = 'laboratoires';
    protected $incrementing = false;
    protected $primaryKey = 'slug';

    public $timestamps = false;
}
