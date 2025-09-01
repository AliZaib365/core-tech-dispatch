<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'agree',
        'send_email',
        'read_or_not',
        'ip_address',
        'status',
    ];
}
