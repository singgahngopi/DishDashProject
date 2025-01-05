<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDash Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="{{ asset('images/logo.jpg') }}" alt="DishDash Logo" class="logo-img">
        </div>
        <h2>DishDash Dashboard</h2>
        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </header>

    <div class="container">
        <!-- DishDash Features Section -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-title">Quick Recipes</h5>
                    <p>Find recipes that fit your busy schedule.</p>
                    <!-- Search Bar -->
                    <form method="GET" action="{{ route('recipes.search') }}">
                        <input type="text" name="query" class="form-control" placeholder="Search for recipes..." required>
                        <button type="submit" class="btn btn-primary mt-2">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-title">Affordable Meals</h5>
                    <p>Cook nutritious meals on a budget.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-title">Halal-Compliant</h5>
                    <p>All recipes follow Islamic dietary laws.</p>
                </div>
            </div>
        </div>

        <!-- Saved Recipes Section -->
        <div class="mt-8 card">
            <h3 class="text-center">Your Saved Recipes</h3>
            @foreach($savedRecipes as $recipe)
                <div class="card mt-3">
                    <h5 class="card-title">{{ $recipe->title }}</h5>
                    <p class="card-text">{{ $recipe->description }}</p>
                    <img src="{{ $recipe->image }}" class="recipe-image" alt="{{ $recipe->title }}">

                    <!-- View Recipe Button -->
                    <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-info mt-2">View Recipe</a>

                    <!-- Optionally, Add a Remove Button -->
                    <form action="{{ route('recipes.remove', $recipe->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2">Remove Recipe</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 DishDash. All rights reserved.</p>
    </footer>

</body>
</html>
