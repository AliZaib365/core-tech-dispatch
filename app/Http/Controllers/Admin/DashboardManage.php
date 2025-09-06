<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

class DashboardManage extends Controller
{
    public function dashboard(Request $request)
    {

        // Stats
        $totalVisitors   = Visitor::count();
        $activeVisitors  = Visitor::where('status', 'active')->count();
        $totalMessages   = Contactus::count();
        $unreadMessages  = Contactus::where('read_or_not', 'unread')->count();

        // Visitors per month
        $visitorStats = Visitor::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as total')
        )->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        // Messages per month
        $messageStats = Contactus::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as total')
        )->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        // Recent Messages
        $recentMessages = Contactus::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalVisitors',
            'activeVisitors',
            'totalMessages',
            'unreadMessages',
            'visitorStats',
            'messageStats',
            'recentMessages'
        ));
    }
}
