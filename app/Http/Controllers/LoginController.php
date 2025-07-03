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
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Prevent login if fields are empty (should not happen due to validation, but extra safety)
        if (empty($validated['email']) || empty($validated['password'])) {
            return back()->withErrors(['email' => 'Email and password are required'])->withInput();
        }

        $user = Register::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('register_id', $user->id);
            $request->session()->put('register_name', $user->name);
            session(['patient_name' => $user->name]);
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
