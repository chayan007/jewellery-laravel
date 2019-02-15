<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    protected $fillable = ['id', 'name', 'img1', 'img2', 'img3', 'desc', 'old_price', 'new_price', 'days', 'in_stock', 'slug', 'category',];
}
