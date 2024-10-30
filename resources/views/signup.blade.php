<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
        height: 100vh;
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

    .form-control {
        background-color: rgba(255, 255, 255, 0.9);
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #66ccff;
    }

    .text-danger {
        font-size: 0.875rem;
    }
</style>

<body>
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="{{ asset('images/logo.png') }}" style="width: 185px;" alt="logo">
                                    </div>
                                    <form action="{{ route('signup') }}" method="POST">
                                        @csrf
                                        <p>Please create your account</p>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example11" name="name" class="form-control" placeholder="Full Name" required />
                                            <label class="form-label" for="form2Example11">Name</label>
                                            <div class="text-danger" id="nameError"></div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example12" name="email" class="form-control" placeholder="Email address" required />
                                            <label class="form-label" for="form2Example12">Email</label>
                                                 <!-- Display email error -->
                                                @if ($errors->has('email'))
                                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                                @endif
                                            <div class="text-danger" id="emailError"></div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example21" name="password" class="form-control" placeholder="Password" required />
                                            <label class="form-label" for="form2Example21">Password</label>
                                            <div class="text-danger" id="passwordError"></div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example22" name="password_confirmation" class="form-control" placeholder="Confirm Password" required />
                                            <label class="form-label" for="form2Example22">Confirm Password</label>
                                            <div class="text-danger" id="passwordConfirmError"></div>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block gradient-custom-2 btn-long mb-3" type="submit">Sign Up</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already have an account?</p>
                                            <a href="{{ url('/loginpage') }}"><button type="button" class="btn btn-outline-primary">Log in</button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector('form');
            
            form.addEventListener('submit', function (event) {
                let valid = true;
                const email = document.getElementById('form2Example12');
                const password = document.getElementById('form2Example21');
                const passwordConfirmation = document.getElementById('form2Example22');
                const name = document.getElementById('form2Example11');
                
                // Reset previous error messages
                document.getElementById('nameError').innerText = '';
                document.getElementById('emailError').innerText = '';
                document.getElementById('passwordError').innerText = '';
                document.getElementById('passwordConfirmError').innerText = '';

                // Check for empty fields
                if (name.value.trim() === '') {
                    document.getElementById('nameError').innerText = 'Name is required.';
                    valid = false;
                }

                if (email.value.trim() === '' || !validateEmail(email.value)) {
                    document.getElementById('emailError').innerText = 'Please enter a valid email address.';
                    valid = false;
                }

                if (password.value.length < 8) {
                    document.getElementById('passwordError').innerText = 'Password must be at least 8 characters long.';
                    valid = false;
                }

                if (password.value !== passwordConfirmation.value) {
                    document.getElementById('passwordConfirmError').innerText = 'Passwords do not match.';
                    valid = false;
                }

                // If not valid, prevent form submission
                if (!valid) {
                    event.preventDefault();
                }
            });

            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(String(email).toLowerCase());
            }
        });
    </script>

</body>
</html>
