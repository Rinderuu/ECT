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
            </ul>
            
            @auth
            <!-- Display User Profile Picture in the Navbar -->
            <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
           data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ auth()->user()->profile_picture ? asset('storage/profile_pictures/' . auth()->user()->profile_picture) : asset('images/defaultprofile.jpg') }}" 
                 alt="Profile" class="rounded-circle" 
                 style="width: 40px; height: 40px; object-fit: cover;">
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('profiles') }}">Profile</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
        </ul>
    </li>
</ul>

            @endauth

            @guest
                <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
            @endguest
        </div>
    </div>
</nav>
<style>       /* Navbar Styles */
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
        </style>