<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/showpage.css') }}">  <!-- Link to the new CSS file -->
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="DishDash Logo" class="logo-img" />
            </div>
            <h1 class="text-white">DishDash Recipe</h1>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="text-primary">{{ $recipe->title }}</h2>

        <!-- Fixed photo size -->
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $recipe->image }}" class="recipe-image img-fluid rounded shadow" alt="{{ $recipe->title }}">
            </div>
            <div class="col-md-6">
                <div class="mt-3">
                    <h4 class="text-muted">Description</h4>
                    <p>{{ $recipe->description }}</p>

                    <h4 class="text-muted mt-3">Ingredients</h4>
                    <ul class="list-group">
                        @foreach(explode(',', $recipe->ingredients) as $ingredient)
                            <li class="list-group-item">{{ $ingredient }}</li>
                        @endforeach
                    </ul>

                    <h4 class="text-muted mt-3">Instructions</h4>
                    <p>{{ $recipe->instructions }}</p>

                    <!-- Save Recipe Button -->
                    <form action="{{ route('recipes.save') }}" method="POST" class="mt-4">
                        @csrf
                        <input type="hidden" name="title" value="{{ $recipe->title }}">
                        <input type="hidden" name="image" value="{{ $recipe->image }}">
                        <input type="hidden" name="description" value="{{ $recipe->description }}">
                        <input type="hidden" name="ingredients" value="{{ $recipe->ingredients }}">
                        <input type="hidden" name="instructions" value="{{ $recipe->instructions }}">
                    </form>

                    <!-- Back to Dashboard Button -->
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-2">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center py-3">
        <p class="text-white">© 2024 DishDash. All rights reserved.</p>
    </footer>
</body>
</html>
