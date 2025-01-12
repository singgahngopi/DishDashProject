<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('query');

    // Fetch recipes from the database using a search query
    $recipes = Recipe::where('title', 'like', '%' . $query . '%')->get();

    // Check if no recipes are found
    if ($recipes->isEmpty()) {
        // Redirect back to dashboard with error message
        return redirect()->route('dashboard')->with('error', 'Sorry, no recipes found for your search.');
    }

    return view('recipes.search', compact('query', 'recipes'));
}


public function save(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|url',
    ]);

    $user = auth()->user();

    // Check if the recipe already exists in the saved recipes for the authenticated user
    $existingRecipe = $user->savedRecipes()->where('title', $request->title)->first();

    if ($existingRecipe) {
        // If the recipe already exists, return with an error message
        return redirect()->back()->with('error', 'This recipe has already been saved.');
    }

    // Check if the recipe already exists in the Recipe table, if not, create it
    $recipe = Recipe::firstOrCreate(
        ['title' => $request->title],
        [
            'image' => $request->image,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
        ]
    );

    // Attach the recipe to the authenticated user
    $user->savedRecipes()->attach($recipe->id);

    // Redirect back to the previous page with a success message
    return redirect()->back()->with('success', 'Recipe saved successfully!');
}

    
    public function remove($id)
{
    $user = auth()->user();

    // Detach the recipe from the user's saved recipes
    $user->savedRecipes()->detach($id);

    // Redirect back to the dashboard with a success message
    return redirect()->route('dashboard')->with('success', 'Recipe removed successfully!');
}


public function show($id)
{
    $recipe = Recipe::findOrFail($id);
    return view('recipes.show', compact('recipe'));
}

public function create()
    {
        return view('recipes.create');
    }

    // Store a new recipe in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|url',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
        ]);

        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->image = $request->image;
        $recipe->description = $request->description;
        $recipe->ingredients = $request->ingredients;
        $recipe->instructions = $request->instructions;
        $recipe->user_id = auth()->id();  // Associate recipe with the authenticated user
        $recipe->save();

        return redirect()->route('dashboard')->with('success', 'Recipe added successfully!');
    }

    // Show the form for editing an existing recipe
    public function edit(Recipe $recipe)
    {
        // Check if the authenticated user is the owner of the recipe
        if ($recipe->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You can only edit your own recipes.');
        }

        return view('recipes.edit', compact('recipe'));
    }

    // Update the specified recipe in the database
    public function update(Request $request, Recipe $recipe)
    {
        // Check if the authenticated user is the owner of the recipe
        if ($recipe->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You can only edit your own recipes.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|url',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
        ]);

        $recipe->title = $request->title;
        $recipe->image = $request->image;
        $recipe->description = $request->description;
        $recipe->ingredients = $request->ingredients;
        $recipe->instructions = $request->instructions;
        $recipe->save();

        return redirect()->route('dashboard')->with('success', 'Recipe updated successfully!');
    }

    
}
