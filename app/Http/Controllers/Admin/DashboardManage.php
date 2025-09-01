<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardManage extends Controller
{
    public function dashboard()
    {
        $total = Contactus::count();
        $unread = Contactus::where('read_or_not', 0)->count();
        $replied = Contactus::where('status', 0)->count();
        $urgent = Contactus::where('subject', 'like', '%urgent%')->count();

        $messages = Contactus::latest()->paginate(5);

        return view('admin.dashboard', compact('total', 'unread', 'replied', 'urgent', 'messages'));
    }
}
