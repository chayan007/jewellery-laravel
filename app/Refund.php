<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Refund extends Model
{
    use Notifiable;
    protected $fillable = ['order', 'user', 'reason'];
}
