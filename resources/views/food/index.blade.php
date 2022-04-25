@extends('layouts.app')

@section('content')


<div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
        Food
    </h2>
    <div class="food text-sm grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-7 gap-12 border-b border-gray-800 pb-16">
        @foreach($foods as $food)
        <div class="food mt-8">
            <div class="relative inline-block aspect-square w-32">
                <a href="/food-item?search={{ $food['description'] ?? 'Apple' }}" class="">
                    <img src="{{ $images['photos'][$loop->index]['src']['small'] ?? asset('images/apple.jpg') }}" alt="food" class="hover:opacity-75 hover:scale-125 rounded-lg transition ease-in-out duration-150 h-full w-full object-cover object-center">
                </a>
                <div class="absolute bottom-0 right-0 h-12 w-12 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">{{ count($food['foodNutrients']) ?? 'N/A' }}</div>
                </div>
            </div>
            <a href="/food-item?search={{ $food['description'] ?? 'Apple' }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                {{ $food['description'] ?? 'Apple' }}
            </a>
            <div class="text-gray-400 mt-1">{{ $food['scientificName'] ?? 'TODO: Figure this out' }}</div>
        </div>
        @endforeach
    </div><!-- end list of food -->


@endsection
