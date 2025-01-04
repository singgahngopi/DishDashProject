<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Recipe;


class RecipeController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Use an external API or your own logic to search for recipes.
        // For example, here we can use Spoonacular API to search recipes
        $response = Http::get('https://api.spoonacular.com/recipes/complexSearch', [
            'query' => $query,
            'apiKey' => env('SPOONACULAR_API_KEY')  // Ensure you have your API key in .env file
        ]);

        $recipes = $response->json()['results'];

        return view('recipes.search', compact('recipes'));
    }
}
class RecipeController extends Controller
{
    public function save(Request $request)
    {
        $user = auth()->user();

        // Check if the recipe already exists in the database
        $recipe = Recipe::firstOrCreate(
            ['source_url' => $request->sourceUrl],
            [
                'title' => $request->title,
                'image' => $request->image,
            ]
        );

        // Attach the recipe to the authenticated user
        $user->savedRecipes()->attach($recipe->id);

        return redirect()->back()->with('success', 'Recipe saved successfully!');
    }
}
