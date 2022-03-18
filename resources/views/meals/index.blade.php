@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
        Meals
    </h2>
    <div class="meals text-sm grid grid-cols-4 gap-12 border-b border-gray-800 pb-16">
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
    <div class="flex my-10">
        <div class="best-meal w-3/4 mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Best Meal</h2>
            <div class="best-meal-container space-y-12 mt-8">
                <div class="meal bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="{{ asset('images/micronutrients.jpg') }}" alt="Meal" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 h-12 w-12 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="recommended w-1/4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorum officia vitae enim, unde obcaecati animi non tempora amet veniam dignissimos. Mollitia in cum expedita adipisci, quasi, vero neque impedit quas aliquid molestias recusandae ratione repudiandae tempore quae nostrum dolorem vel harum, explicabo nesciunt? Est nisi nam quae unde beatae! Unde vero deleniti magnam impedit magni repudiandae blanditiis, veritatis officia?
        </div>
    </div>
</div><!-- end container -->


@endsection
