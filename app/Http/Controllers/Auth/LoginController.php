<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']); // Auth required for the whole controller
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request){
        // Validate
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        // Sign in
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details.');
        }
        // Redirect
        return redirect()->route('dashboard');
    }
}
