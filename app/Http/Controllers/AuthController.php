<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile; // Ensure this is the correct namespace for your Profile model
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function showSignUpForm()
    {
        return view('signup'); // Ensure this view exists
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:profile',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->route('signup.form')
                             ->withErrors($validator)
                             ->withInput();
        }

        Profile::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('loginpage')->with('success', 'Registration successful! Please log in.');
    }

    public function showLoginForm()
    {
        return view('loginpage'); // Ensure this view exists
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('home');
        }

        // Authentication failed
        return redirect()->route('loginpage')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session and regenerate the token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('http://127.0.0.1:8000/index')->with('success', 'Logged out successfully.');
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('profiles', ['user' => $user]);
    }

    public function editProfile()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('loginpage')->withErrors('Please log in to edit your profile.');
        }

        return view('profilesedit', ['user' => $user]);
    }

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:profile,email,' . Auth::id(),
        ]);

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('profile.edit')->withErrors('User not found.');
        }

        $user->update($validated);

        return redirect()->route('profiles')->with('success', 'Profile updated successfully.');
    }
}
