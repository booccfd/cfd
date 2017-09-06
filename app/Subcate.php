<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcate extends Model
{
    protected $fillable = [
        'subcate_name', 'status', 'menu_id'
    ];
}
