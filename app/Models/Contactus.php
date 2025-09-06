<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Contactus extends Model
{
    use HasFactory;
    
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
