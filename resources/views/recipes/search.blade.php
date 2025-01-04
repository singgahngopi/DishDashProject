<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Search Results</h2>
        <div class="row">
            @foreach ($recipes as $recipe)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $recipe['image'] }}" class="card-img-top" alt="{{ $recipe['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe['title'] }}</h5>
                            <p class="card-text">This is a quick description of the recipe.</p>
                            <a href="{{ $recipe['sourceUrl'] }}" class="btn btn-primary" target="_blank">View Recipe</a>
                                <form action="{{ route('recipes.save') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="title" value="{{ $recipe['title'] }}">
                                    <input type="hidden" name="image" value="{{ $recipe['image'] }}">
                                    <input type="hidden" name="sourceUrl" value="{{ $recipe['sourceUrl'] }}">
                                    <button type="submit" class="btn btn-success">Save Recipe</button>
                                </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
