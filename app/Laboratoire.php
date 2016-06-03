<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    protected $table = 'laboratoires';
    public $incrementing = false;
    protected $primaryKey = 'slug';

    public $timestamps = false;
}
