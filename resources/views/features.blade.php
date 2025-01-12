<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features - DishDash</title>
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
        <section id="features" class="mb-5">
            <h2 class="text-center">FEATURES</h2><br>
            <p class="short-desc">Discover the key features of DishDash that make meal planning and cooking easier for everyone!</p><br>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="min-height: 240px">
                            <img src="images/QuickRecipes.png" class="card-img-top mx-auto d-block" alt="Quick Recipes" style="height: 100px; width: auto;">
                            <h5 class="card-title">Quick Recipes</h5>
                            <p class="card-text">Find recipes that fit your busy schedule and enjoy a healthy meal in no time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="min-height: 240px">
                            <img src="images/AffordableMeals.png" class="card-img-top mx-auto d-block" alt="Quick Recipes" style="height: 100px; width: auto;">
                            <h5 class="card-title">Affordable Meals</h5>
                            <p class="card-text">Cook delicious and nutritious meals on a budget with our simple recipes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="min-height: 240px">
                            <img src="images/HalalCommpliant.png" class="card-img-top mx-auto d-block" alt="Quick Recipes" style="height: 100px; width: auto;">
                            <h5 class="card-title">Halal-Compliant</h5>
                            <p class="card-text">All recipes follow Islamic dietary laws, ensuring you eat according to your values.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body" style="min-height: 240px">
                        <img src="images/search.png" class="card-img-top mx-auto d-block" alt="Quick Recipes" style="height: 100px; width: auto;">
                            <h5 class="card-title">Ingredient-Based Search</h5>
                            <p class="card-text">Input your pantry items, and we'll suggest recipes you can make right away.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body" style="min-height: 240px">
                        <img src="images/stepbystep.png" class="card-img-top mx-auto d-block" alt="Quick Recipes" style="height: 100px; width: auto;">
                            <h5 class="card-title">Step-by-Step Guides</h5>
                            <p class="card-text">Follow easy, beginner-friendly instructions with tips for every step of the process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body" style="min-height: 240px">
                        <img src="images/Favourite.png" class="card-img-top mx-auto d-block" alt="Quick Recipes" style="height: 100px; width: auto;">
                            <h5 class="card-title">Save Your Favorites</h5>
                            <p class="card-text">Create a personalized recipe collection by saving the meals you love the most.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body" style="min-height: 240px">
                        <img src="images/Community.png" class="card-img-top mx-auto d-block" alt="Quick Recipes" style="height: 100px; width: auto;">
                            <h5 class="card-title">Interactive Community</h5>
                            <p class="card-text">Share reviews, tips, and suggestions with other users, creating a supportive food community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body" style="min-height: 240px">
                        <img src="images/mobile.png" class="card-img-top mx-auto d-block" alt="Quick Recipes" style="height: 100px; width: auto;">
                            <h5 class="card-title">Mobile-Friendly</h5>
                            <p class="card-text">Access DishDash easily on your smartphone or any device, ensuring convenience wherever you are.</p>
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