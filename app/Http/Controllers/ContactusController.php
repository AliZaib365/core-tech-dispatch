<?php

namespace App\Http\Controllers;

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

        $contactus = \App\Models\Contactus::create($request->all());

        return response()->json(['message' => 'Contact request submitted successfully.', 'data' => $contactus], 201);
    }
}
