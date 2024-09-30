<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            background-color: #fff;
        }

        .btn-primary {
            background-color: #FFD700;
            color: black;
            font-weight: 700;
        }

        .navbar {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #003366;
        }

        .nav-link {
            color: #003366;
            font-weight: 500;
        }

        .nav-link:hover {
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

        .profile-card {
            padding: 20px;
            border-radius: 10px;
            background-color: #fff7e6;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .profile-title {
            font-weight: 700;
            color: #003366;
        }

        .profile-value {
            font-size: 1.25rem;
            font-weight: 500;
            margin-top: 10px;
            color: #333;
        }

        .sidebar {
            background-color: #f4f4f4;
            height: 100%;
            padding: 20px;
            border-radius: 10px;
        }

        .sidebar h5, .sidebar a {
            font-weight: 500;
            color: #003366;
            display: block;
            padding: 10px 0;
        }

        .sidebar a {
            text-decoration: none;
        }

        .sidebar a:hover {
            color: #66ccff;
        }

        .user-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: #003366;
            margin-bottom: 20px;
        }

        .edit-profile-btn {
            background-color: #FFD700;
            color: black;
            font-weight: 700;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .edit-profile-btn:hover {
            background-color: #FFC107;
            cursor: pointer;
        }

        @media (max-width: 576px) {
            .profile-card {
                margin-bottom: 15px;
            }

            .profile-value {
                font-size: 1rem;
            }
        }
    </style>
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
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('calculate') }}">Calculate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profiles') }}">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- User Profile Page -->
<div class="container mt-5">
    <h2 class="text-center mb-4">User Profile</h2>

    <div class="row">
        <!-- Left column for labels and links -->
        <div class="col-md-3">
            <div class="sidebar">
                <!-- User Name -->
                <div class="user-name">{{ $user->name }}</div>

                <!-- Clickable Sidebar Links -->
                <a href="#email">EMAIL</a>
                <a href="#location">LOCATION</a>
                <a href="#monthly-usage">MONTHLY USAGE</a>
                <a href="#savings">SAVINGS OPPORTUNITY</a>
            </div>
        </div>

        <!-- Right column for user data -->
        <div class="col-md-9">
            <div class="row">
                <!-- Email -->
                <div class="col-md-12 mb-3">
                    <div class="profile-card" id="email">
                        <h5 class="profile-title text-primary">EMAIL</h5>
                        <p class="profile-value">{{ $user->email }}</p>
                    </div>
                </div>

                <!-- Location -->
                <div class="col-md-12 mb-3">
                    <div class="profile-card" id="location">
                        <h5 class="profile-title text-primary">LOCATION</h5>
                        <p class="profile-value">{{ $user->location ?? 'Location not set' }}</p>
                    </div>
                </div>

                <!-- Monthly Usage -->
                <div class="col-md-12 mb-3">
                    <div class="profile-card" id="monthly-usage">
                        <h5 class="profile-title text-primary">MONTHLY USAGE</h5>
                        <p class="profile-value">{{ $user->monthly_usage ?? 'N/A' }} kWh</p>
                    </div>
                </div>

                <!-- Savings Opportunity -->
                <div class="col-md-12 mb-3">
                    <div class="profile-card" id="savings">
                        <h5 class="profile-title text-primary">SAVINGS OPPORTUNITY</h5>
                        <p class="profile-value">Estimate your potential savings based on recent usage.</p>
                    </div>
                </div>

                <!-- Edit Profile Button -->
                <div class="col-md-12 text-center">
                    <a href="{{ route('profile.edit') }}">
                        <button class="edit-profile-btn">Edit Profile</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFyHqnldRyFvQpIHNd+I7L8sbYDXp+f3e9y5v9I5SmHU5/awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
