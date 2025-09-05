<?php

use App\Models\Contactus;
use Illuminate\Http\Request;

if (!function_exists('unreadMessagesCount')) {
    function unreadMessagesCount()
    {
        return Contactus::where('read_or_not', 0)->count();
    }
}

// Get unread messages
if (!function_exists('getUnreadMessages')) {
    function getUnreadMessages()
    {
        return Contactus::where('read_or_not', 0)->latest()->get();
    }
}
