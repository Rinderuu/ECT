<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Appliance Tracking</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for better layout and design -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            height: 100%;
        }

    
        /* About Us Section */
        .about-us {
            text-align: center;
            padding: 50px 20px;
            background-color: #f9f9f9;
        }

        .about-us h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .about-us p {
            font-size: 1.2rem;
            color: #666;
            max-width: 800px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .team-section {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 50px;
        }

        .team-member {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 250px;
        }

        .team-member img {
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h5 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .team-member p {
            color: #666;
        }

        .social-links a {
            margin: 0 5px;
            color: #003366;
            font-size: 1.5rem;
        }

        .social-links a:hover {
            color: #66ccff;
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
        .btn-primary-signup {
            background-color: #FFD700; /* Golden color for a bold look */
            color: black;
            font-weight: 700;
            padding: 7px 13px;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    @auth
    @include('partials.navbar')

<!-- About Us Section -->
<section class="about-us">
    <h2>About Us</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </p>

    <div class="team-section">
        <div class="team-member">
            <img src="https://via.placeholder.com/100" alt="PM">
            <h5>PM</h5>
            <p>Project Manager</p>
            <div class="social-links">
                <a href="https://facebook.com/PMprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/PMprofile" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/PMprofile" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="team-member">
            <img src="https://via.placeholder.com/100" alt="Frontend/Backend">
            <h5>Frontend/Backend</h5>
            <p>Developer</p>
            <div class="social-links">
                <a href="https://facebook.com/FrontendBackendprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/FrontendBackendprofile" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/FrontendBackendprofile" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="team-member">
            <img src="https://via.placeholder.com/100" alt="QA">
            <h5>QA</h5>
            <p>Quality Assurance</p>
            <div class="social-links">
                <a href="https://facebook.com/QAprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/QAprofile" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/QAprofile" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</section>
@endauth

@guest

@include('partials.navbarguest')

<section class="about-us">
    <h2>About Us</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </p>

    <div class="team-section">
        <div class="team-member">
            <img src="https://via.placeholder.com/100" alt="PM">
            <h5>PM</h5>
            <p>Project Manager</p>
            <div class="social-links">
                <a href="https://facebook.com/PMprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/PMprofile" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/PMprofile" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="team-member">
            <img src="https://via.placeholder.com/100" alt="Frontend/Backend">
            <h5>Frontend/Backend</h5>
            <p>Developer</p>
            <div class="social-links">
                <a href="https://facebook.com/FrontendBackendprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/FrontendBackendprofile" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/FrontendBackendprofile" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="team-member">
            <img src="https://via.placeholder.com/100" alt="QA">
            <h5>QA</h5>
            <p>Quality Assurance</p>
            <div class="social-links">
                <a href="https://facebook.com/QAprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/QAprofile" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/QAprofile" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</section>

@endguest


<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Font Awesome for social icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
