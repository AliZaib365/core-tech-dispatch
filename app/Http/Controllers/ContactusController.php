<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string',
            'agree' => 'boolean',
            'send_email' => 'boolean',
        ]);

        if ($request->has('agree') == 0 || !$request->agree) {
            return response()->json(['error' => 'You must agree to the terms and conditions.'], 422);
        }

        $contactus = Contactus::create([
            ...$request->all(),
            'ip_address' => $request->ip(),
        ]);

        return response()->json(['message' => 'Contact request submitted successfully.', 'data' => $contactus], 201);
    }


    public function notifications()
    {
        $unread = Contactus::where('read_or_not', 0)->latest()->get();

        return response()->json([
            'count' => $unread->count(),
            'messages' => $unread,
        ]);
    }

    public function markAsRead($id)
    {
        $contact = Contactus::findOrFail($id);
        $contact->update(['read_or_not' => 1]);

        return response()->json(['message' => 'Marked as read']);
    }
}
