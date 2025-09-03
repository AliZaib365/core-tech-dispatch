<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardManage extends Controller
{
    public function dashboard(Request $request)
    {
        // Build the query dynamically for server-side filtering, sorting, and pagination
        $query = Contactus::query();

        // Search filter
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('message', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        // Status filter
        $status = $request->input('status', 'all');
        if ($status === 'new') {
            $query->where('read_or_not', 0);
        } elseif ($status === 'replied') {
            $query->where('status', 0); // Assuming status=0 means replied based on your original code
        } elseif ($status === 'urgent') {
            $query->where('subject', 'like', '%urgent%');
        }

        // Sorting
        $sortBy = $request->input('sort_by', 'created_at');
        $dir = $request->input('dir', 'desc');
        $query->orderBy($sortBy, $dir);

        // Pagination with customizable per_page
        $perPage = (int) $request->input('per_page', 5);
        $messages = $query->paginate($perPage)->withQueryString(); // Appends query params to pagination links

        // Counts (kept as totals; if you want filtered counts, you can clone $query and count)
        $total = Contactus::count();
        $unread = Contactus::where('read_or_not', 0)->count();
        $replied = Contactus::where('status', 0)->count();
        $urgent = Contactus::where('subject', 'like', '%urgent%')->count();

        return view('admin.dashboard', compact('total', 'unread', 'replied', 'urgent', 'messages'));
    }
}
