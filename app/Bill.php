<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';
    public $incrementing = false;
    public $timestamps = false;
}
