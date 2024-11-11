<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

        .profile-pic {
            width: 100px; /* Set width for profile picture */
            height: 100px; /* Set height for profile picture */
            border-radius: 50%; /* Circular image */
            object-fit: cover; /* Cover to maintain aspect ratio */
            margin-bottom: 15px; /* Space below the image */
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
@include('partials.navbar')
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
                <a href="#monthly-usage">MONTHLY USAGE</a>
                <a href="#savings">SAVINGS OPPORTUNITY</a>
            </div>
        </div>

        <!-- Right column for user data -->
        <div class="col-md-9">
            <div class="row">
                <!-- Profile Picture -->
                <div class="col-md-12 text-center mb-3">
                <img src="{{ $user->profile_picture ? asset('storage/profile_pictures/' . $user->profile_picture) : asset('images/defaultprofile.jpg') }}"  alt="Profile Picture" class="profile-pic" style="width: 150px; height: 150px; object-fit: cover;">
</div>

                <!-- Email -->
                <div class="col-md-12 mb-3">
                    <div class="profile-card" id="email">
                        <h5 class="profile-title text-primary">EMAIL</h5>
                        <p class="profile-value">{{ $user->email }}</p>
                    </div>
                </div>

                <!-- Monthly Usage -->
                <div class="col-md-12 mb-3">
                    <div class="profile-card" id="monthly-usage">
                        <h5 class="profile-title text-primary">MONTHLY USAGE</h5>

                        @if($appliances && count($appliances) > 0)
                            <ul class="list-group">
                                @foreach($appliances as $appliance)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $appliance->appliance }} - {{ $appliance->monthly_consumption }} kWh
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="profile-value">No appliance data available.</p>
                        @endif
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
