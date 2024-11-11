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
        'user_id', // Foreign key to link to User
    ];

    // Define the relationship back to User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Link to the User model
    }
}
