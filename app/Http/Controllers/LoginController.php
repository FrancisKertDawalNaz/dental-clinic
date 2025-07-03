<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Register;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('main');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Register::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            // Store user info in session
            $request->session()->put('register_id', $user->id);
            $request->session()->put('register_name', $user->name);
            // Redirect to patient home
            return redirect()->route('patient.home');
        } else {
            return back()->withErrors(['email' => 'Invalid email or password'])->withInput();
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}
