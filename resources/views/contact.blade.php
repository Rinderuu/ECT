<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Appliance Tracking</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS for layout and design -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
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

        /* Contact Section */
        .contact-section {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: flex-start; /* Align items at the start vertically */
            flex-wrap: wrap; /* Allow items to wrap to the next line */
            padding: 40px 20px; /* Increased padding for better spacing */
            background-color: #ffffff;
        }

        .contact-info, .contact-form {
            width: 45%;
            padding: 30px;
            margin: 15px; /* Add margin to create space between items */
            border-radius: 10px;
        }

        .contact-info {
            background-color: #f0f8ff; /* Light blue background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-info h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #003366;
            border-bottom: 2px solid #66ccff; /* Underline style */
            padding-bottom: 10px;
        }

        .contact-info .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-info .info-item i {
            font-size: 30px; /* Adjust size of the icons */
            margin-right: 20px;
            color: #003366; /* Icon color */
        }

        .contact-info .info-item a {
            color: #003366;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .contact-info .info-item a:hover {
            color: #66ccff; /* Hover effect */
        }

        .contact-form {
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #003366;
        }

        .contact-form label {
            font-size: 1rem;
            color: #003366;
        }

        .contact-form .form-control {
            margin-bottom: 15px;
            padding: 12px; /* Increased padding for better usability */
            font-size: 1rem;
            border-radius: 8px; /* Rounded corners */
        }

        .contact-form .btn-primary {
            background: linear-gradient(to right, #0056b3, #66ccff); /* Gradient for button */
            border: none;
            font-size: 1rem;
            padding: 12px 25px; /* Increased padding for better button size */
            text-transform: uppercase;
            border-radius: 8px; /* Rounded corners */
        }

        .contact-form .btn-primary:hover {
            background: linear-gradient(to right, #003366, #66ccff); /* Darker gradient on hover */
        }

        /* Map Section */
        .map-section {
            width: 100%;
            padding: 20px;
            text-align: center;
        }

        .map-section h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #003366;
        }

        .map-section iframe {
            width: 100%;
            height: 400px;
            border: 0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        /* FAQ Section */
        .faq-section {
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .faq-section h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #003366;
        }

        .faq-section p {
            font-size: 1rem;
            color: #333;
            margin-bottom: 10px;
        }

        .faq-section p strong {
            color: #003366;
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


<!-- Contact Section -->
<section class="contact-section">
    <!-- Left Contact Information Section -->
    <div class="contact-info">
        <h3>Contact Information</h3>
        <!-- Email Address -->
        <div class="info-item">
            <i class="fas fa-envelope"></i> <!-- Font Awesome Email Icon -->
            <a href="mailto:your-email@example.com">your-email@example.com</a>
        </div>
        <!-- Telephone Number -->
        <div class="info-item">
            <i class="fas fa-phone"></i> <!-- Font Awesome Phone Icon -->
            <a href="tel:+1234567890">+1 234 567 890</a>
        </div>
        <!-- Cellphone Number -->
        <div class="info-item">
            <i class="fas fa-mobile-alt"></i> <!-- Font Awesome Mobile Icon -->
            <a href="tel:+1987654321">+1 987 654 321</a>
        </div>
        <!-- Office Address -->
        <div class="info-item">
            <i class="fas fa-map-marker-alt"></i> <!-- Font Awesome Location Icon -->
            <span>123 Appliance Street, Suite 400, Cityville, CA 90001</span>
        </div>
        <!-- Business Hours -->
        <div class="info-item">
            <i class="fas fa-clock"></i> <!-- Font Awesome Clock Icon -->
            <span>Mon-Fri: 9am - 6pm<br>Sat: 10am - 4pm<br>Sun: Closed</span>
        </div>
        <!-- Social Media Links -->
        <div class="info-item">
            <i class="fas fa-share-alt"></i> <!-- Font Awesome Share Icon -->
            <a href="https://facebook.com/yourprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/yourprofile" target="_blank" class="mx-3"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Right Form Section -->
    <div class="contact-form">
        <h2>Get in Touch</h2>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone number:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
            </div>
            <div class="mb-3">
                <label for="concern" class="form-label">Concern:</label>
                <textarea class="form-control" id="concern" rows="4" placeholder="What's your concern?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <h4>Find Us Here</h4>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7722.33975801623!2d120.96210597407294!3d15.696898899191565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3393ba0bbf124c67%3A0x39a9ed9bb32a5f37!2sPHINMA%20Araullo%20University%20-%20South%20Campus!5e0!3m2!1sen!2sph!4v1695649212375!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


<!-- FAQ Section -->
<section class="faq-section">
    <h4>Frequently Asked Questions</h4>
    <p><strong>Q1: How can I get in touch with support?</strong></p>
    <p>A1: You can reach us by email, phone, or by filling out the contact form on this page. We aim to respond to all inquiries within 24 hours.</p>

    <p><strong>Q2: What is your response time?</strong></p>
    <p>A2: Our typical response time is within 24 hours during business days. For urgent matters, please call us directly.</p>

    <p><strong>Q3: Can I schedule a callback?</strong></p>
    <p>A3: Yes, please include your preferred time in the contact form, and we will do our best to accommodate your request.</p>
</section>

@endauth

@guest
@include('partials.navbarguest')

<!-- Contact Section -->
<section class="contact-section">
    <!-- Left Contact Information Section -->
    <div class="contact-info">
        <h3>Contact Information</h3>
        <!-- Email Address -->
        <div class="info-item">
            <i class="fas fa-envelope"></i> <!-- Font Awesome Email Icon -->
            <a href="mailto:your-email@example.com">your-email@example.com</a>
        </div>
        <!-- Telephone Number -->
        <div class="info-item">
            <i class="fas fa-phone"></i> <!-- Font Awesome Phone Icon -->
            <a href="tel:+1234567890">+1 234 567 890</a>
        </div>
        <!-- Cellphone Number -->
        <div class="info-item">
            <i class="fas fa-mobile-alt"></i> <!-- Font Awesome Mobile Icon -->
            <a href="tel:+1987654321">+1 987 654 321</a>
        </div>
        <!-- Office Address -->
        <div class="info-item">
            <i class="fas fa-map-marker-alt"></i> <!-- Font Awesome Location Icon -->
            <span>123 Appliance Street, Suite 400, Cityville, CA 90001</span>
        </div>
        <!-- Business Hours -->
        <div class="info-item">
            <i class="fas fa-clock"></i> <!-- Font Awesome Clock Icon -->
            <span>Mon-Fri: 9am - 6pm<br>Sat: 10am - 4pm<br>Sun: Closed</span>
        </div>
        <!-- Social Media Links -->
        <div class="info-item">
            <i class="fas fa-share-alt"></i> <!-- Font Awesome Share Icon -->
            <a href="https://facebook.com/yourprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/yourprofile" target="_blank" class="mx-3"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Right Form Section -->
    <div class="contact-form">
        <h2>Get in Touch</h2>
        <form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone number:</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required pattern="\d{1,12}" maxlength="12" oninput="this.value=this.value.replace(/[^0-9]/g,'');">

    </div>
    <div class="mb-3">
        <label for="concern" class="form-label">Concern:</label>
        <textarea class="form-control" id="concern" name="concern" rows="4" placeholder="What's your concern?" required oninput="checkWordCount(this)" maxlength="900"></textarea>
        <small id="wordCount" class="form-text text-muted">Max 150 words.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <h4>Find Us Here</h4>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7722.33975801623!2d120.96210597407294!3d15.696898899191565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3393ba0bbf124c67%3A0x39a9ed9bb32a5f37!2sPHINMA%20Araullo%20University%20-%20South%20Campus!5e0!3m2!1sen!2sph!4v1695649212375!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


<!-- FAQ Section -->
<section class="faq-section">
    <h4>Frequently Asked Questions</h4>
    <p><strong>Q1: How can I get in touch with support?</strong></p>
    <p>A1: You can reach us by email, phone, or by filling out the contact form on this page. We aim to respond to all inquiries within 24 hours.</p>

    <p><strong>Q2: What is your response time?</strong></p>
    <p>A2: Our typical response time is within 24 hours during business days. For urgent matters, please call us directly.</p>

    <p><strong>Q3: Can I schedule a callback?</strong></p>
    <p>A3: Yes, please include your preferred time in the contact form, and we will do our best to accommodate your request.</p>
</section>

@endguest
@include('partials.footer')

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
