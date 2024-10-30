<?php

// app/Models/Profile.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\ProfileController;

class Profile extends Authenticatable
{
    use HasFactory, Notifiable;

    // Specify the table if it's not the plural form of the model name
    protected $table = 'profile'; // Make sure this matches your actual database table

    // Allow mass assignment for these attributes
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture', // Added this field for image uploads
    ];

    // Hide sensitive data
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casts for attributes
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // In Profile.php model
    public function getProfilePictureUrlAttribute()
    {
        return $this->profile_picture 
            ? asset('storage/profile_pictures/' . $this->profile_picture) 
            : asset('default-profile-pic.jpg');  // This fallback image is optional
    }

    public function appliances()
{
    return $this->hasMany(ApplianceTracking::class, 'user_id');
}

}
