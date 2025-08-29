<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'agree',
        'send_email',
    ];
}
