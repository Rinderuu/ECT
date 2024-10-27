<?php

// app/Models/Profile.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Authenticatable
{
    use HasFactory, Notifiable;

    // Specify the table if it's not the plural form of the model name
    protected $table = 'profile'; // Note: ensure the table name is plural

    // Allow mass assignment for these attributesa
    protected $fillable = [
        'name',
        'email',
        'password',
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


    
}
