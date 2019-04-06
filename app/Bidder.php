<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    protected $table = 'bidder';
    public $incrementing = false;
    public $timestamps = false;
}
