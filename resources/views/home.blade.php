<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Appliance Tracking</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


    <!-- Custom CSS for better layout and design -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            color: #343a40;
            height: 100%;
        }

        .hero-section {
            background: url("{{ asset('images/BGPROJ-transformed.jpeg') }}") no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6); /* Darker overlay for better contrast */
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #FFD700; /* Golden color for a bold look */
            color: black;
            font-weight: 700;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
        }


        .btn-outline-primary:hover {
            background-color: #003366;
            color: white;
        }

        /* Feature Section */
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


        /* Animation Styles */
        .animated-text {
            font-size: 2rem;
            font-weight: 700;
            color: #FFD700; /* Golden color for emphasis */
            opacity: 0;
            transition: opacity 1s ease-out; /* Smooth transition */
        }
        

        .animated-text.show {
            opacity: 1;
        }
    </style>
</head>
<body>
@auth
@include('partials.navbar')
<!-- Hero Section -->
<div class="hero-section">
    <div class="overlay"></div>
    <div class="hero-content">
        <div id="welcomeMessage" class="animated-text">Welcome, {{ auth()->user()->name }}!</div>
        <h1>
            Energy Usage, <span id="animatedText" class="animated-text">Simplified</span>
        </h1>
        <p>Track your appliances and manage your energy consumption with ease</p>
        <a href="calculate" class="btn btn-primary">Calculate Now</a>
    </div>
</div>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <h2 class="mb-5">Why Choose Our System?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="feature">
                    <h4>Smart Appliance Tracking</h4>
                    <p>Monitor and analyze your appliances' energy usage over time to make informed decisions.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>Cost Estimation</h4>
                    <p>Estimate monthly energy costs and optimize your usage to save on bills.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <h4>Eco-Friendly</h4>
                    <p>Get insights on how to reduce energy waste and make eco-friendly choices.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endauth

@guest
<div class="container mt-5 text-center">
    <p>Please <a href="{{ route('loginpage') }}">log in</a> to continue.</p>
</div>
@endguest

<!-- JavaScript for Animation -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const welcomeMessage = document.getElementById('welcomeMessage');
        if (welcomeMessage) {
            setTimeout(() => {
                welcomeMessage.classList.add('show'); // Show welcome message after a delay
            }, 500); // Delay to allow other elements to load
        }

        const animatedText = document.getElementById('animatedText');
const phrases = ["Simplified", "Calculate", "Save"];
let index = 0;

// Set the size of the text to 4rem
animatedText.style.fontSize = '4rem';

        // Show the first phrase immediately
        animatedText.textContent = phrases[index];
        animatedText.classList.add('show'); 

        setInterval(() => {
            animatedText.classList.remove('show'); // Start fading out
            setTimeout(() => {
                index = (index + 1) % phrases.length; // Cycle through phrases
                animatedText.textContent = phrases[index]; // Change text
                animatedText.classList.add('show'); // Fade in the new text
            }, 500); // Delay for fading out before changing text
        }, 2000); // Change text every 2 seconds
    });
</script>
@include('partials.footer')


<!-- Bootstrap Bundle with Popper.js (make sure this is right before the closing body tag) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</body>
</html>
