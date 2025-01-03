<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DishDash Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- DishDash Features Section -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <!-- Quick Recipes Card -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Quick Recipes</h5>
                                    <p class="card-text">Find recipes that fit your busy schedule.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Affordable Meals Card -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Affordable Meals</h5>
                                    <p class="card-text">Cook nutritious meals on a budget.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Halal-Compliant Meals Card -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Halal-Compliant</h5>
                                    <p class="card-text">All recipes follow Islamic dietary laws.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DishDash About Section -->
            <div class="bg-white mt-8 p-6 shadow-xl sm:rounded-lg">
                <h3 class="text-center text-2xl">About DishDash</h3>
                <p class="text-center mt-4">DishDash is your companion for quick, affordable, and healthy meals. Designed for students, it simplifies cooking and promotes healthier eating habits. Find quick and affordable recipes that adhere to halal dietary standards.</p>
            </div>
        </div>
    </div>
</x-app-layout>
