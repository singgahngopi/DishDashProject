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
        ]
    );

    // Attach the recipe to the authenticated user
    $user->savedRecipes()->attach($recipe->id);

    // Redirect back to the previous page with a success message
    return redirect()->back()->with('success', 'Recipe saved successfully!');
}
}
