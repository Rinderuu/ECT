<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Admin Login
    public function login(Request $request)
    {
        // Validate the login form inputs
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Check if the provided credentials match the admin credentials
        if ($request->username === 'admin@admin' && $request->password === 'admin12345') {
            // Store a session variable to mark the admin as logged in
            session(['is_admin' => true]);

            // Redirect to the admin dashboard
            return redirect()->route('admindashboard');
        }

        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'username' => 'Invalid username or password.',
        ])->onlyInput('username');
    }

    // Admin Dashboard
    public function admindashboard()
    {
        // Ensure only authenticated admins can access the dashboard
        if (!session('is_admin')) {
            return redirect()->route('admin.login');
        }

        // Admin is authenticated, display the dashboard
        return view('admindashboard');
    }

    // Function to fetch all users and their appliance data
    public function showAllUsers()
    {
        // Ensure only authenticated admins can view users' data
        if (!session('is_admin')) {
            return redirect()->route('admin.login');
        }

        // Fetch all users with their appliances
        $users = \App\Models\User::with('appliances')->get();

        // Return the view with the users data
        return view('admin.users', compact('users'));
    }

    // Logout
    public function logout(Request $request)
    {
        // Clear the admin session on logout
        session()->forget('is_admin');
        return redirect()->route('admin.login');
    }
// In your AdminController (or the appropriate controller)
// In your AdminController (or the appropriate controller)
public function showAdminDashboard()
{
    $users = User::with('appliances')->get();
    dd($users); // This will dump the users data to check if it's fetched properly
    return view('admin.admindashboard', compact('users'));
}



}
