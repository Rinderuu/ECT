<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile - Appliance Tracking</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f9f9f9;
        }

        .container {
            margin-top: 50px;
        }

        .profile-card {
            background-color: #fff7e6;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-card h2 {
            font-weight: 600;
            margin-bottom: 20px;
            color: #003366;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-primary {
            background-color: #FFD700;
            color: black;
            font-weight: 700;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #f1c40f;
        }

        .alert {
            margin-bottom: 20px;
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

        @media (max-width: 576px) {
            .container {
                margin-top: 20px;
                padding: 0 15px;
            }

            .profile-card {
                padding: 20px;
            }

            .btn-primary {
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
  @auth
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
                      <a class="nav-link" href="{{ route('home') }}">Home</a>
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
              <!-- Logout Button -->
              <form action="{{ route('logout') }}" method="POST" class="d-flex ms-auto">
                  @csrf
                  <button type="submit" class="btn btn-outline-primary">Logout</button>
              </form>
          </div>
      </div>
  </nav>

  <!-- Profile Edit Section -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8 col-lg-8">
              <div class="profile-card">
                  <h2>Edit Profile</h2>
                  
                  <!-- Display success/error messages -->
                  @if(session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @elseif(session('error'))
                      <div class="alert alert-danger">
                          {{ session('error') }}
                      </div>
                  @endif

                  <!-- Profile Edit Form -->
                  <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      
                      <!-- Profile Picture -->
                      <div class="mb-3 text-center">
                          <label for="profile_picture" class="form-label">Profile Picture</label><br>
                          <img src="{{ asset('storage/profile_pictures/' . $user->profile_picture) }}" alt="Profile Picture" class="profile-img img-thumbnail mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                          <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                      </div>
                      
                      <!-- Form fields -->
                      <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                      </div>
                      
                      <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                      </div>
                      
                      <!-- Password Change -->
                      <div class="mb-3">
                          <label for="password" class="form-label">New Password (Leave empty if not changing)</label>
                          <input type="password" class="form-control" id="password" name="password">
                      </div>
                      
                      <div class="mb-3">
                          <label for="password_confirmation" class="form-label">Confirm New Password</label>
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                      </div>
                      
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                  </form>
              </div>
          </div>
      </div>
  </div>

  @endauth

  @guest
      <div class="container mt-5 text-center">
          <p>Please <a href="{{ route('loginpage') }}">log in</a> to continue.</p>
      </div>
  @endguest

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFyHqnldRyFvQpIHNd+I7L8sbYDXp+f3e9y5v9I5SmHU5/awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
