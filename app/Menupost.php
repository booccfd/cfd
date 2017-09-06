<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menupost extends Model
{
    protected $fillable = [
        'dsc', 'status', 'menu_id'
    ];
}
