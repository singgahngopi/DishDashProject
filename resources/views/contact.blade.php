<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - DishDash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/emblem.png') }}">
</head>
<body>
    <!-- Header -->

    <header class="header">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('images/logoheader.png') }}" alt="Logo" class="logo-img" />
        </div>

        <!-- Toggler for Mobile View -->
        <button class="navbar-toggler d-lg-none" type="button" aria-label="Toggle navigation" onclick="toggleNav()">
            ☰
        </button>

        <!-- Navigation Links -->
        <nav class="nav-container">
            <ul class="nav d-lg-flex d-none">
                <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('features') ? 'active' : '' }}" href="{{ url('/features') }}">Features</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>

        <!-- Buttons -->
        <div class="ms-3 d-lg-block d-none">
            <a href="{{ route('login') }}" class="btn btn-primary btn-sm me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
        </div>
    </div>

    <!-- Collapsible Menu for Mobile -->
    <div id="mobile-nav" class="mobile-nav d-lg-none">
        <ul class="nav">
            <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>
            <li class="nav-item"><a class="nav-link {{ Request::is('features') ? 'active' : '' }}" href="{{ url('/features') }}">Features</a></li>
            <li class="nav-item"><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <div class="mt-3">
            <a href="{{ route('login') }}" class="btn btn-primary btn-sm me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
        </div>
    </div>
</header>
    <!-- <header class="header">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <img src="{{ asset('images/logoheader.png') }}" alt="Logo" class="logo-img" />
        </div>
        <div class="d-flex align-items-center">
            <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('features') ? 'active' : '' }}" href="{{ url('/features') }}">Features</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
            </nav>
        </div>
        <div class="ms-3">
            <a href="{{ route('login') }}" class="btn btn-primary btn-sm me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
        </div>
    </div>
</header> -->

<div class="tagline-section">
    <p>fuel your day, the <span class="dish">Dish</span><span class="dash">Dash</span><span class="dish">™</span> way!</p>
</div>

    <!-- Main Content -->
    <main class="container mt-5">
        <section id="contact" class="mb-5">
            <h2 class="text-center">CONTACT US</h2><br>
            <p class="short-desc">If you have any questions, feel free to reach out to us! We're here to help you with any inquiries about DishDash and our services.</p><br>
            
            <div class="row">
                <div class="col-md-6">
                    <h3 style="text-align: center;">Get in Touch</h3><br>
                    <p style="text-align: center;">If you have any questions or feedback, please don't hesitate to contact us using the form below.</p>
                    <!-- Contact Form -->
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label"><strong>Your Name</strong></label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><strong>Your Email</strong></label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label"><strong>Your Message</strong></label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Submit</button><br><br>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3 style="text-align: center;">Our Contact Information</h3><br>
                    <p style="text-align: center;">You can also reach us through the following methods:</p>
                    <ul>
                        <li><strong>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> support@dishdash.com</li>
                        <li><strong>Phone&nbsp;&nbsp;&nbsp;&nbsp;:</strong> +1 (555) 123-4567</li>
                        <li><strong>Address:</strong> 123 DishDash Street, City, Country</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Left Section: Logo and Contacts -->
        <div class="footer-left d-flex align-items-center">
            <img src="images/logofooter.png" alt="Logo" class="footer-logo">
            <div class="footer-contact ms-3">
                <p>123 DishDash Street, Food City, FC 45678</p>
                <p>Phone: +1 234 567 890</p>
            </div>
        </div>

        <!-- Right Section: Navigation -->
        <div class="footer-nav">
            <ul class="nav-list d-flex">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/features') }}">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
    <br><p class="text-white">© 2024 DishDash. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function toggleNav() {
        const mobileNav = document.getElementById('mobile-nav');
        mobileNav.style.display = mobileNav.style.display === 'block' ? 'none' : 'block';
    }
</script>
</body>
</html>
