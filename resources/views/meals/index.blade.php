@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
        Meals
    </h2>
    <div class="meals text-sm grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-7 gap-12 border-b border-gray-800 pb-16">
        <div class="meal mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="{{ asset('images/micronutrients.jpg') }}" alt="Meal" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 h-12 w-12 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                Hard-code-name
            </a>
            <div class="text-gray-400 mt-1">Meal-type</div>
        </div>
    </div><!-- end list of meals -->
    <div class="flex flex-col lg:flex-row my-10">
        <div class="best-meal w-full md:w-3/4 mr-0 lg:mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Best Meal</h2>
            <div class="best-meal-container space-y-12 mt-8">
                <div class="meal bg-gray-800 rounded-lg shadow-md flex px-4 py-4">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="{{ asset('images/micronutrients.jpg') }}" alt="Meal" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 h-10 w-10 bg-gray-900 rounded-full" style="right: -10px; bottom: -10px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <div class="ml-8">
                        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400">
                            Hard-code-name
                        </a>
                        <div class="text-gray-400 mt-1">Meal-type</div>
                        <p class="mt-4 text-xs text-gray-400 hidden md:block">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, numquam dicta tempore sed laboriosam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="recommended md:w-1/4 mt-12 lg:mt-0">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recommended</h2>
            <div class="recommended-container space-y-12 mt-8">
                <div class="meal flex">
                    <a href="#">
                        <img src="{{ asset('images/avocado-toast-variations.jpg') }}" alt="Meal" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="#" class="hover:text-gray-300 ml-2">Name of Meal</a>
                        <div class="text-gray-400 text-sm mt-1 ml-2 hidden lg:block">Best bits...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- end container -->


@endsection
