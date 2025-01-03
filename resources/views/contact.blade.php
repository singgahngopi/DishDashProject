<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - DishDash</title>
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

    <!-- Main Content -->
    <main class="container mt-5">
        <section id="contact" class="mb-5">
            <h2 class="text-center">Contact Us</h2>
            <p class="text-center">If you have any questions, feel free to reach out to us! We're here to help you with any inquiries about DishDash and our services.</p>
            
            <div class="row">
                <div class="col-md-6">
                    <h3>Get in Touch</h3>
                    <p>If you have any questions or feedback, please don't hesitate to contact us using the form below.</p>
                    <!-- Contact Form -->
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3>Our Contact Information</h3>
                    <p>You can also reach us through the following methods:</p>
                    <ul>
                        <li><strong>Email:</strong> support@dishdash.com</li>
                        <li><strong>Phone:</strong> +1 (555) 123-4567</li>
                        <li><strong>Address:</strong> 123 DishDash Street, City, Country</li>
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
