<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appliance Tracking Results</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for better layout -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            padding: 20px;
            margin: 0;
            background-color: #f4f4f4; /* Light background color */
        }

        .container {
            max-width: 800px; /* Increased width for better layout */
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            background-color: #fff; /* White background for card effect */
        }

        .btn-primary {
            background-color: #FFD700; /* Golden color for a bold look */
            color: black;
            font-weight: 700;
        }

        .btn-outline-primary {
            border-color: #003366;
            color: #003366;
            font-weight: 600;
        }

        .btn-outline-primary:hover {
            background-color: #003366;
            color: white;
        }

        /* Card Styles */
        .result-card {
            padding: 20px;
            border-radius: 10px;
            background-color: #fff7e6; /* Light yellowish background */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px; /* Space between cards */
        }

        .result-title {
            font-weight: 700;
            color: #003366; /* Dark blue */
        }

        .result-value {
            font-size: 1.5rem;
            font-weight: 500;
            margin-top: 10px;
            color: #333; /* Dark text for contrast */
        }

        /* Additional styles for layout */
        .grid-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* Features Section */
        .features-section {
            padding: 60px 0;
            background-color: #f9f9f9;
            text-align: center;
        }

        .feature {
            padding: 20px;
            border-radius: 10px;
            background-color: #fff7e6;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 15px;
        }

        .feature h4 {
            margin-bottom: 15px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .feature p {
            font-size: 1rem;
            color: #666;
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 40px 0;
            text-align: center;
            background-color: #fff;
        }

        .testimonial {
            margin: 15px;
            padding: 20px;
            border-radius: 10px;
            background-color: #f0f0f0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .testimonial p {
            font-size: 1rem;
            color: #555;
        }

        .testimonial h5 {
            margin-top: 10px;
            font-weight: bold;
            color: #003366; /* Dark blue */
        }
    </style>

    <script>
        window.onload = function() {
            // Retrieve stored results from localStorage
            const totalCost = localStorage.getItem('totalCost');
            const appliance = localStorage.getItem('appliance');
            const monthlyConsumption = localStorage.getItem('monthlyConsumption');

            // Set values in the result page
            document.getElementById('applianceResult').textContent = appliance || 'N/A';
            document.getElementById('monthlyResult').textContent = (monthlyConsumption || 0) + ' kWh';
            document.getElementById('costResult').textContent = 'PHP ' + (totalCost || '0.00');
        }
    </script>
</head>
<body>
@include('partials.navbar')

<!-- Appliance Tracking Results -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Appliance Tracking Calculator - Results</h2>
    <p class="text-center">Here is the monthly consumption and cost for your selected appliance:</p>
    <div class="grid-container">
        <div class="result-card">
            <h4 class="result-title">Appliance</h4>
            <p class="result-value">{{ session('appliance', 'N/A') }}</p>
        </div>
        <div class="result-card">
            <h4 class="result-title">Monthly Consumption</h4>
            <p class="result-value">{{ session('monthly_consumption', 0) }} kWh</p>
        </div>
        <div class="result-card">
            <h4 class="result-title">Monthly Cost</h4>
            <p class="result-value">PHP {{ session('total_cost', '0.00') }}</p>
        </div>

        <!-- Added Daily, Weekly, Yearly Cost Cards -->
        <div class="result-card">
            <h4 class="result-title">Daily Cost</h4>
            <p class="result-value">PHP {{ session('daily_cost', '0.00') }}</p>
        </div>
        <div class="result-card">
            <h4 class="result-title">Weekly Cost</h4>
            <p class="result-value">PHP {{ session('weekly_cost', '0.00') }}</p>
        </div>
        <div class="result-card">
            <h4 class="result-title">Yearly Cost</h4>
            <p class="result-value">PHP {{ session('yearly_cost', '0.00') }}</p>
        </div>
    </div>
</div>

<div class="text-center mt-4">
    <button class="btn btn-outline-primary" onclick="window.location.href='calculate';">Calculate Another</button>
</div>

<!-- Features Section -->
<div class="features-section">
    <h2>Key Features</h2>
    <div class="grid-container">
        <div class="feature">
            <h4>Smart Appliance Tracking</h4>
            <p>Monitor and analyze your appliances' energy usage over time to make informed decisions.</p>
        </div>
        <div class="feature">
            <h4>Cost Estimation</h4>
            <p>Get accurate monthly cost estimates based on your appliance usage.</p>
        </div>
        <div class="feature">
            <h4>Energy Saving Tips</h4>
            <p>Receive personalized tips to reduce energy consumption and save money.</p>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="testimonials-section">
    <h2>User Testimonials</h2>
    <div class="testimonial">
        <p>"This calculator has changed the way I manage my electricity bills. I highly recommend it!"</p>
        <h5>- John D.</h5>
    </div>
    <div class="testimonial">
        <p>"I love the real-time tracking feature. It helps me stay on top of my energy usage!"</p>
        <h5>- Sarah L.</h5>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
