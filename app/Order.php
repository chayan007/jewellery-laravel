<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use Notifiable;

    protected $fillable = ['id', 'order', 'status', 'quantity', 'product', 'customer', 'user', 'expected',];
}
