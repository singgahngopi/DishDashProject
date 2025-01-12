<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - DishDash</title>
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

<div class="tagline-section">
    <p>fuel your day, the <span class="dish">Dish</span><span class="dash">Dash</span><span class="dish">™</span> way!</p>
</div>

    <!-- Main Content -->
    <main class="container mt-5">

    <section id="about" class="about-section mb-5">
    <div class="container">
        <div class="row">
            <!-- Left Column: Image -->
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h2 style="text-align: center;">ABOUT <span class="dish">Dish</span><span class="dash">Dash</span><span class="dish">™</span></h2><br>
                <p>DishDash™ is a web application crafted for students seeking quick, affordable, and nutritious meal solutions. We aim to simplify meal preparation by offering easy-to-make recipes tailored to busy lifestyles, limited budgets, and minimal cooking skills. Rooted in Islamic values and promoting sustainable health, DishDash™ empowers students to eat better, save time, and fuel their day with delicious, wholesome meals.</p>
            </div>
            <!-- Right Column: Title and Description -->
            <div class="col-md-6">
                <img src="images/logoabout.png" alt="About DishDash" class="img-fluid">
            </div>
            
        </div>
    </div>
    </section>
    <section id="features" class="mb-5">
    <h2 class="text-center">fuel your day, the <span class="dish">Dish</span><span class="dash">Dash</span><span class="dish">™</span> way!</h2>
    <p style="text-align: center;">Our motto captures the essence of what DishDash™ stands for—providing students with the energy they need to excel in their academic and personal lives. By offering quick, healthy, and affordable recipes, DishDash™ ensures you stay fueled, focused, and ready to conquer your day with meals that fit seamlessly into your busy lifestyle.</p>
    </section>
    <section id="about" class="about-section mb-5" style="background-color: rgb(116, 144, 168); color: white;">
    <div class="container">
        <div class="row align-items-start">
            <!-- Left Column -->
            <div class="col-md-6">
                <h2 style="text-align: center;">VISION</h2><br>
                <ul><li>To be the leading platform for students worldwide, revolutionizing how they prepare, enjoy, and connect through nutritious and affordable meals that align with their values and goals.</li></ul>
            </div>
            <!-- Right Column -->
            <div class="col-md-6">
                <h2 style="text-align: center;">MISSION</h2><br>
                <ul>
                    <li>To provide quick and easy recipe solutions tailored to student needs, fostering healthier eating habits.</li>
                    <li>To empower students to save time and money while enjoying delicious, nutritious meals.</li>
                    <li>To promote sustainable and inclusive practices, ensuring accessibility for diverse dietary preferences.</li>
                    <li>To create a user-friendly platform that supports learning, creativity, and community engagement in the kitchen.</li>
                </ul>
            </div>
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