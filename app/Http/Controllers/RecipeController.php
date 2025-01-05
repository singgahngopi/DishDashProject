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

    return view('recipes.search', compact('recipes'));
}


public function save(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|url',
    ]);

    $user = auth()->user();

    // Check if the recipe already exists in the database
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


}
