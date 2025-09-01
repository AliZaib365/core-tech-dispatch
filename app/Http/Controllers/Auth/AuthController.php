<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            $user = Auth::user()->name;
            return redirect('admin/dashboard')->with('success', "Welcome back $user");
        }

        return response()->json(['error' => 'Invalid credentials please enter valid credentials'], 401);
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'currentPassword' => 'required|string',
            'newPassword' => 'nullable|string|min:8',
            'confirmPassword' => 'nullable|string|same:newPassword',
        ]);

        $user = Auth::user();

        // Check current password
        if (!Hash::check($request->currentPassword, $user->password)) {
            return response()->json(['error' => 'Current password is incorrect.'], 400);
        }

        $user->name = $request->fullName;
        $user->email = $request->email;

        if ($request->filled('newPassword')) {
            $user->password = Hash::make($request->newPassword);
        }

        $user->save();

        return response()->json(['success' => 'Profile updated successfully.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login')->with('success', 'Logout Successfully..');
    }
}
