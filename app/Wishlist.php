<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    //
    protected $table = 'wishlist';
    public $incrementing = false;
    public $timestamps = false;
}
