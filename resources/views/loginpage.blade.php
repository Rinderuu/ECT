<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFyHqnldRyFvQpIHNd+I7L8sbYDXp+f3e9y5v9I5SmHU5/awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</head>

<style>
    .gradient-custom-2 {
        background: #003366;
    }

    .gradient-form {
        background: url("{{ asset('images/BGPROJ-transformed.jpeg') }}") no-repeat center center/cover;
        min-height: 100vh;
    }

    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh;
        }
    }

    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }

    .btn-long {
        width: 100%;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 15px;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .form-control {
        background-color: rgba(255, 255, 255, 0.9);
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #66ccff;
    }
</style>

<body>
    <section class="h-100 gradient-form">
        <div class="container-fluid py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="{{ asset('images/logo.png') }}" style="width: 185px;" alt="logo">
                                    </div>
                                    <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-outline mb-4">
        <input type="email" id="form2Example11" name="email" class="form-control" placeholder="Email address" required />
        <label class="form-label" for="form2Example11">Email</label>
    </div>

    <div class="form-outline mb-4">
        <input type="password" id="form2Example22" name="password" class="form-control" placeholder="Password" required />
        <label class="form-label" for="form2Example22">Password</label>
    </div>

    <div class="text-center pt-1 mb-5 pb-1">
        <button class="btn btn-primary btn-block gradient-custom-2 btn-long mb-3" type="submit">Log in</button>
    </div>

    <div class="d-flex align-items-center justify-content-center pb-4">
        <p class="mb-0 me-2">Don't have an account?</p>
        <a href="{{ route('signup.form') }}"><button type="button" class="btn btn-outline-primary">Create new</button></a>
    </div>
</form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
