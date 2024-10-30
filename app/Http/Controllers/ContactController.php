<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Your model for the database

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming form data
        $validated = $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'concern' => 'required',
        ]);

        // Create a new contact record in the database
        Contact::create([
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'concern' => $validated['concern'],
        ]);

        // Redirect or show success message
        return redirect()->back()->with('success', 'Your concern has been submitted successfully.');
    }
}

