<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplianceTracking extends Model
{
    use HasFactory;

    protected $table = 'appliance_tracking';

    protected $fillable = [
        'user_id',
        'appliance',
        'wattage',
        'hours',
        'cost_per_kwh',
        'monthly_consumption',
        'total_cost',
        'daily_cost',   // New fields
        'weekly_cost',
        'yearly_cost',
    ];
}
