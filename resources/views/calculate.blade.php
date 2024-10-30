<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appliance Tracking Calculator</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for better layout and design -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #eef2f3, #8e9eab);
            color: #343a40;
            height: 100vh;
        }


        .container {
            max-width: 600px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        h2 {
            color: #003399;
            font-weight: 700;
        }

        .btn-primary {
            border-color: #003366;
            color: #003366;
            background-color: white;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #003366;
            color: white;
        }

        label {
            font-weight: 500;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
            font-size: 16px;
        }

        .output {
            background: #fff9c4;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* New style for the yellow background */
        .text-center {
            background-color: #fff9c4; /* Light yellow background */
            padding: 15px; /* Padding around the text */
            border-radius: 10px; /* Rounded corners */
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

        .login-message {
        font-size: 1.5rem;
        color: #003366; /* Dark Blue */
        font-weight: bold;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3); /* Slightly darker shadow */
        text-align: center;
        margin: 0 auto;
        max-width: 600px; /* Center the text in a container */
    }

    .login-message a {
        color: #FFD700; /* Yellow (Golden) */
        text-decoration: none;
        font-weight: bold;
        border-bottom: 3px solid #FFD700;
        padding-bottom: 5px;
        background-color: #003366; /* Dark Blue Background */
        border-radius: 5px;
        padding: 5px 10px;
        transition: all 0.3s ease;
    }

    .login-message a:hover {
        color: #FFC107; /* Lighter Yellow on hover */
        border-bottom-color: #FFC107;
        background-color: #001f4d; /* Darker Blue on hover */
    }


    .centered-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full viewport height */
        background-color: #f8f9fa; /* Light background color */
    }

    .login-message {
        font-size: 1.5rem;
        color: #003366; /* Dark Blue */
        font-weight: bold;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3); /* Slightly darker shadow */
        text-align: center;
    }

    .login-message a {
        color: #FFD700; /* Yellow (Golden) */
        text-decoration: none;
        font-weight: bold;
        border-bottom: 3px solid #FFD700;
        padding-bottom: 5px;
        background-color: #003366; /* Dark Blue Background */
        border-radius: 5px;
        padding: 5px 10px;
        transition: all 0.3s ease;
    }

    .login-message a:hover {
        color: #FFC107; /* Lighter Yellow on hover */
        border-bottom-color: #FFC107;
        background-color: #001f4d; /* Darker Blue on hover */
    }

    </style>
</head>
<body>
  @auth
  @include('partials.navbar')

<!-- Appliance Tracking Calculator Form -->
<div class="container mt-5">
    <div class="text-center mb-4">
        <h2>APPLIANCE TRACKING CALCULATOR</h2>
        <p>Know how much your gadgets and appliances consume so you can manage your budget better.</p>
    </div>
    <form action="{{ route('appliance.store') }}" method="POST" id="calcForm">
    @csrf
    <div class="mb-3">
        <label for="appliance" class="form-label">Select an Appliance</label>
        <select class="form-select" id="appliance" name="appliance" onchange="autoFillData()">
            <option value="Refrigerator">Refrigerator</option>
            <option value="Air Conditioner">Air Conditioner</option>
            <option value="Television">Television</option>
            <option value="Washing Machine">Washing Machine</option>
            <option value="Microwave">Microwave</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="wattage" class="form-label">Wattage (Power Rating)</label>
        <input type="number" class="form-control" id="wattage" name="wattage" placeholder="Enter power rating in watts" required>
    </div>
    <div class="mb-3">
        <label for="hours" class="form-label">Daily Usage (1 - 24 hrs)</label>
        <input type="number" class="form-control" id="hours" name="hours" placeholder="Enter daily usage in hours" required>
    </div>
    <div class="mb-3">
    <label for="cost" class="form-label">Cost per kWh</label>
    <input type="number" class="form-control" id="cost" name="cost_per_kwh" placeholder="Enter cost per kWh in your area" step="0.01" required>
</div>
    <button type="submit" class="btn btn-primary">Calculate</button>
</form>

</div>
<script>
    // Appliance data with default wattage and cost per kWh
    const applianceData = {
        "Refrigerator": { "wattage": 150, "cost": 0.12 },
        "Air Conditioner": { "wattage": 2000, "cost": 0.15 },
        "Television": { "wattage": 100, "cost": 0.10 },
        "Washing Machine": { "wattage": 500, "cost": 0.13 },
        "Microwave": { "wattage": 1200, "cost": 0.14 }
    };

    // Function to auto-fill wattage and cost per kWh based on selected appliance
    function autoFillData() {
        const applianceSelect = document.getElementById('appliance').value;
        const wattageField = document.getElementById('wattage');
        const costField = document.getElementById('cost');

        // Get the wattage and cost for the selected appliance
        const selectedAppliance = applianceData[applianceSelect];

        if (selectedAppliance) {
            wattageField.value = selectedAppliance.wattage;
            costField.value = selectedAppliance.cost;
        } else {
            wattageField.value = '';
            costField.value = '';
        }
    }
</script>

<!-- JavaScript for calculations and redirection -->
<script>
    function calculateConsumption() {
        // Get values from the form
        const appliance = document.getElementById('appliance').value;
        const wattage = document.getElementById('wattage').value;
        const hours = document.getElementById('hours').value;
        const costPerKwh = document.getElementById('cost').value;

        // Validate inputs
        if (wattage > 0 && hours >= 1 && hours <= 24 && costPerKwh > 0) {
            // Calculate daily and monthly consumption
            const dailyConsumption = (wattage * hours) / 1000; // kWh/day
            const monthlyConsumption = dailyConsumption * 30; // kWh/month
            const totalCost = monthlyConsumption * costPerKwh; // Total cost

            // Store results in localStorage
            localStorage.setItem('appliance', appliance);
            localStorage.setItem('monthlyConsumption', monthlyConsumption.toFixed(2));
            localStorage.setItem('totalCost', totalCost.toFixed(2));

            // Redirect to result page
            window.location.href = 'result';
        } else {
            alert('Please enter valid input values.');
        }
    }
</script>

@endauth



<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
