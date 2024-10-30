<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplianceTracking;
use Illuminate\Support\Facades\Auth;

class ApplianceController extends Controller
{
    public function store(Request $request)
    {
        // Check if the user is logged in
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to perform this action.');
        }

        // Validate input data
        $request->validate([
            'appliance' => 'required|string',
            'wattage' => 'required|numeric|min:1',
            'hours' => 'required|integer|min:1|max:24',
            'cost_per_kwh' => 'required|numeric|min:0.01',
        ]);

        // Perform calculations
        $wattage = $request->wattage;
        $hours = $request->hours;
        $costPerKwh = $request->cost_per_kwh;

        $dailyConsumption = ($wattage * $hours) / 1000; // kWh/day
        $monthlyConsumption = $dailyConsumption * 30; // kWh/month
        $totalCost = $monthlyConsumption * $costPerKwh; // Total cost (per month)

        // New calculations for daily, weekly, and yearly costs
        $dailyCost = $dailyConsumption * $costPerKwh;
        $weeklyCost = $dailyCost * 7; // Weekly cost (7 days)
        $yearlyCost = $dailyCost * 365; // Yearly cost (365 days)

        // Save to the database
        ApplianceTracking::create([
            'user_id' => Auth::id(),  // Ensure this returns a valid user ID
            'appliance' => $request->appliance,
            'wattage' => $wattage,
            'hours' => $hours,
            'cost_per_kwh' => $costPerKwh,
            'monthly_consumption' => $monthlyConsumption,
            'total_cost' => $totalCost,
            'daily_cost' => $dailyCost,  // Save daily cost
            'weekly_cost' => $weeklyCost,  // Save weekly cost
            'yearly_cost' => $yearlyCost,  // Save yearly cost
        ]);

        // Redirect to the result page with the calculated values
        return redirect()->route('appliance.result')->with([
            'appliance' => $request->appliance,
            'monthly_consumption' => $monthlyConsumption,
            'total_cost' => $totalCost,
            'daily_cost' => $dailyCost,
            'weekly_cost' => $weeklyCost,
            'yearly_cost' => $yearlyCost
        ]);
    }

    public function result()
    {
        return view('result');
    }
}
