<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe; // Import the Recipe model

class DashboardController extends Controller
{
    public function index()
    {
        // Assuming the user has a relationship to saved recipes (e.g., savedRecipes)
        $savedRecipes = auth()->user()->savedRecipes; // Adjust based on your relationship

        // Return the dashboard view with saved recipes
        return view('dashboard', compact('savedRecipes'));
    }
}
