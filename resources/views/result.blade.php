<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appliance Tracking Results</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

        /* Navbar Styles */
        .navbar {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #003366; /* Dark blue */
        }

        .nav-link {
            color: #003366; /* Dark blue */
            font-weight: 500;
        }

        .nav-link:hover {
            color: #66ccff; /* Light blue */
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
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two columns */
            gap: 20px; /* Space between grid items */
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
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ETC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calculate">Calculate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Appliance Tracking Results -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Appliance Tracking Calculator - Results</h2>
    <p class="text-center">Here is the monthly consumption and cost for your selected appliance:</p>
    <div class="grid-container">

        <!-- Result Card 1 -->
        <div class="result-card">
            <h4 class="result-title">Appliance</h4>
            <p class="result-value" id="applianceResult">N/A</p>
        </div>

        <!-- Result Card 2 -->
        <div class="result-card">
            <h4 class="result-title">Monthly Consumption</h4>
            <p class="result-value" id="monthlyResult">0 kWh</p>
        </div>

        <!-- Result Card 3 -->
        <div class="result-card">
            <h4 class="result-title">Monthly Cost</h4>
            <p class="result-value" id="costResult">PHP 0.00</p>
        </div>

        <!-- Result Card 4 -->
        <div class="result-card">
            <h4 class="result-title">Savings Opportunity</h4>
            <p class="result-value">Estimate your potential savings!</p>
        </div>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-outline-primary" onclick="window.location.href='calculate';">Calculate Another</button>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFyHqnldRyFvQpIHNd+I7L8sbYDXp+f3e9y5v9I5SmHU5/awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
