<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']); // Only guest can register
    }
    //
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        // dd($request);
        // Validate
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'password' => 'required|confirmed',
            'profile_pix' => '',
            'buying' => '',
            'address' => ''
        ]);

        // Store
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'profile_pix' => $request->profile_pix,
            'buying' => $request->buying,
            'address' => $request->address,
        ]);
        // Sign in after registration
        auth()->attempt($request->only('email', 'password'));
        // Redirect
        return redirect()->route('dashboard');
    }
}
