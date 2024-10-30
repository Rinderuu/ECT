<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appliance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'monthly_usage',
        'user_id', // Foreign key to link to Profile
    ];

    // Define the relationship back to Profile
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'user_id'); // Adjust if necessary
    }
}
