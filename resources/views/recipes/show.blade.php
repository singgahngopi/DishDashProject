<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/showpage.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h2>{{ $recipe->title }}</h2>

        <!-- Fixed photo size with border -->
        <img src="{{ $recipe->image }}" class="recipe-image" alt="{{ $recipe->title }}">

        <div class="mt-4">
            <h4>Description</h4>
            <p>{{ $recipe->description }}</p>

            <h4>Ingredients</h4>
            <ul>
                @foreach(explode(',', $recipe->ingredients) as $ingredient)
                    <li>{{ $ingredient }}</li>
                @endforeach
            </ul>

            <h4>Instructions</h4>
            <p>{{ $recipe->instructions }}</p>

            <!-- Save Recipe Button -->
            <form action="{{ route('recipes.save') }}" method="POST">
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
</body>
</html>
