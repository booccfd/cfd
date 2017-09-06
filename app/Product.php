<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'pro_name', 'pro_img', 'pro_dsc', 'pro_status', 'menu_id'
    ];
}
