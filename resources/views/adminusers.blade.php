<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            color: #343a40;
            margin: 0;
            height: 100vh;
            display: flex;
            overflow: hidden;
        }

        /* Sidebar Styling */
        .sidebar {
            background-color: #343a40;
            color: white;
            width: 250px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100%;
        }

        .sidebar h3 {
            color: #FFD700;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            padding: 10px 0;
            text-decoration: none;
            font-weight: 500;
            display: block;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            color: #FFD700;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Admin Panel</h3>
        <a href="{{ route('admindashboard') }}">Dashboard</a>
        <a href="">User</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Welcome to the users</h1>
        <p>This is the main content area. Customize it as needed.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
