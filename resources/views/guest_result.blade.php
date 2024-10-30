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

        .login-message {
            font-size: 1.2rem;
            color: #003366; /* Dark Blue */
            text-align: center;
            margin-top: 20px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Create a 2-column grid */
            gap: 20px; /* Gap between grid items */
        }
    </style>

    <script>
        window.onload = function() {
            // Retrieve stored results from localStorage
            const totalCost = localStorage.getItem('totalCost');
            const appliance = localStorage.getItem('appliance');

            // Set values in the result page
            document.getElementById('applianceResult').textContent = appliance || 'N/A';
            document.getElementById('costResult').textContent = 'PHP ' + (totalCost || '0.00'); // Display in PHP
        }
    </script>
</head>
<body>
@include('partials.navbarguest')

<!-- Appliance Tracking Results -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Appliance Tracking Calculator - Results</h2>
    <p class="text-center">Here are the cost details for your selected appliance:</p>
    <div class="grid-container">
        <div class="result-card">
            <h4 class="result-title">Appliance</h4>
            <p class="result-value" id="applianceResult">Loading...</p>
        </div>
        <div class="result-card">
            <h4 class="result-title">Monthly Cost</h4>
            <p class="result-value" id="costResult">Loading...</p>
        </div>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-outline-primary" onclick="window.location.href='calculate_guest';">Calculate Another</button>
    </div>

    <div class="login-message">
        <p>If you want to save your results, please <a href="loginpage">log in</a>.</p>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
