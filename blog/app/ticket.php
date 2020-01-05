<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    //

    public $timestamps = false;
    public $primaryKey = 'id';
    protected $casts = [ 'id' => 'string' ];
    }

