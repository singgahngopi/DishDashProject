<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - DishDash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="DishDash Logo" class="logo-img" />
            </div>
            <h1 class="text-white">DishDash Dashboard</h1>
            <div class="d-flex align-items-center">
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link text-white" href="features">Features</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="about">About</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="ms-3">
                    <a href="{{ route('login') }}" class="btn btn-light btn-sm me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
                </div>
            </div>
        </div>
    </header>
    
 <!-- Back to Home Link -->
 <div class="container mt-3">
    <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
</div>

    <!-- Main Content -->
    <main class="container mt-5">
        <section id="about" class="mb-5">
            <h2 class="text-center">About DishDash</h2>
            <p class="text-center">DishDash is your companion for quick, affordable, and healthy meals. Designed for students, it simplifies cooking and promotes healthier eating habits.</p>
            
            <div class="row">
                <div class="col-md-6">
                    <h3>Our Mission</h3>
                    <p>At DishDash, we aim to make meal preparation easy, affordable, and nutritious for everyone. Our mission is to provide recipes that cater to diverse needs, from quick meals to healthy options that are both halal-compliant and budget-friendly.</p>
                </div>
                <div class="col-md-6">
                    <h3>Why Choose DishDash?</h3>
                    <ul>
                        <li>Quick and easy recipes tailored for students and busy individuals.</li>
                        <li>Affordable meal options that don’t compromise on quality or taste.</li>
                        <li>Halal-compliant meals that follow Islamic dietary guidelines.</li>
                        <li>Step-by-step instructions for each recipe to make cooking a breeze.</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer text-center py-3">
        <p class="text-white">© 2024 DishDash. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
