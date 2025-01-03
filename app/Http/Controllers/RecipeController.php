<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
