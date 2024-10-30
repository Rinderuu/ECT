<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile; // Ensure this is the correct namespace for your Profile model
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;



class AuthController extends Controller
{
    public function showSignUpForm()
    {
        return view('signup'); // Ensure this view exists
    }

    public function register(Request $request)
    {
        // Custom error messages
        $messages = [
            'email.unique' => 'The email address is already registered.',
        ];
    
        // Validator with custom messages
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:profile', // Ensure 'profile' is your actual table name
            'password' => 'required|string|confirmed|min:8',
        ], $messages);
    
        // Check validation
        if ($validator->fails()) {
            return redirect()->route('signup.form')
                             ->withErrors($validator)
                             ->withInput();
        }
    
        // Create the new user
        Profile::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        // Redirect to login with success message
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

        $appliances = $user->appliances; // Fetch the appliances associated with the user

        return view('profiles', ['user' => $user, 'appliances' => $appliances]);
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
        'profile_picture' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // Validation for image upload
        'password' => 'nullable|string|confirmed|min:8', // Optional password validation
    ]);

    $user = Auth::user();

    if (!$user) {
        return redirect()->route('profile.edit')->withErrors('User not found.');
    }

    // Handle profile picture upload
    if ($request->hasFile('profile_picture')) {
        // Delete old profile picture if exists
        if ($user->profile_picture) {
            Storage::delete('public/profile_pictures/' . $user->profile_picture);
        }

        // Store new profile picture
        $path = $request->file('profile_picture')->store('profile_pictures', 'public');
        $user->profile_picture = basename($path);
    }

    // Update the user details
    $user->name = $validated['name'];
    $user->email = $validated['email'];

    

    // Update password if provided
    if ($request->input('password')) {
        $user->password = Hash::make($request->input('password'));
    }

    $user->save();

    return redirect()->route('profiles')->with('success', 'Profile updated successfully.');
}

}
