<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/emblem.png') }}">
</head>
<body>
    <!-- Header -->
    <!-- <header class="header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="{{ asset('images/logoheader.png') }}" alt="DishDash Logo" class="logo-img" /> -->
            <!-- </div> -->
            <!-- <h1 class="text-white">DishDash Dashboard</h1> -->
            <!-- <div class="d-flex align-items-center">
                <nav>
    <ul class="nav">
        <li class="nav-item"><a class="nav-link text-white" href="{{ url('/features') }}">Features</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ url('/about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>

                <div class="ms-3">
                    <a href="{{ route('login') }}" class="btn btn-light btn-sm me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
                </div>
            </div>
        </div>
    </header> -->

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

<div class="video-container">
        <video loop autoplay muted>
            <source src="images/vid.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-overlay"></div>
    <div class="welcome-text">
        <h2>Welcome to DishDash™</h2>
        <p>Quick, healthy, and affordable meals made for your busy student life.<br>Eat well, stress less!</p>
        <a href="{{ route('register') }}" class="get-started-btn">Get Started</a> <!-- Get Started button -->
    </div>
</div>

    <!-- Main Content -->
    <main class="container mt-5">
        
    <section id="about" class="about-section mb-5">
    <div class="container">
        <div class="row">
            <!-- Left Column: Image -->
            <div class="col-md-6">
                <img src="images/glimpse.png" alt="About DishDash" class="img-fluid">
            </div>

            <!-- Right Column: Title and Description -->
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h2>A Glimpse of <span class="dish">Dish</span><span class="dash">Dash</span><span class="dish">™</span></h2><br>
                <p>The DishDash web application is designed to cater to students seeking quick, easy, cost-saving, and nutritious meal solutions. The app will feature a curated list of delicious yet healthy recipes tailored to the student lifestyle, emphasizing speed, affordability, and minimal equipment. It aims to encourage better eating habits and simplify meal preparation that adheres to Islamic principles amidst busy academic schedules.</p>
                <a href="{{ url('/about') }}" class="btn btn-primary mt-3">Learn More</a>
            </div>
        </div>
    </div>
    </section>

        <section id="features" class="mb-5">
            <h2 class="text-center">Why Choose <span class="dish">Dish</span><span class="dash">Dash</span><span class="dish">™</span>?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Quick Recipes</h5>
                            <p class="card-text">Find recipes that fit your busy schedule.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Affordable Meals</h5>
                            <p class="card-text">Cook nutritious meals on a budget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Halal-Compliant</h5>
                            <p class="card-text">All recipes follow Islamic dietary laws.</p>
                        </div>
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
