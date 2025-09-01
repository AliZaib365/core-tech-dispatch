<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login')->with('success', 'Logout Successfully..');
    }
}
