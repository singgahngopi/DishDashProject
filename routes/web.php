<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will be
| assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route for displaying the recipe creation form
    Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');

    // Route for storing the new recipe
    Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');

    // Route for displaying the recipe edit form
    Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');

    // Route for updating the recipe
    Route::put('/recipes/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');
});

// Other routes
Route::get('/features', function () {
    return view('features');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/recipes/search', [RecipeController::class, 'search'])->name('recipes.search');
Route::post('/recipes/save', [RecipeController::class, 'save'])->name('recipes.save');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redirect to the welcome page
})->name('logout');

Route::delete('/recipes/{id}/remove', [RecipeController::class, 'remove'])->name('recipes.remove');
Route::get('/recipe/{id}', [RecipeController::class, 'show'])->name('recipes.show');
