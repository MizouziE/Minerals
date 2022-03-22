@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="food-item border-b border-gray-800 pb-12 flex">
        <div class="flex-none w-1/2">
            <img src="{{ asset('images/apple.jpg') }}" alt="Appleee">
        </div>
        <div class="ml-12">
            <h2 class="font-semibold text-2xl">{{ $food[0]['description'] ?? 'Name Here' }}</h2>
            <div class="flex flex-wrap items-center space-x-12">
                <div class="flex flex-col items-left">
                @foreach($fNs as $fN)
                @if ($loop->index < 5)
                    <div class="flex flex-row items-center py-2">
                        <div class="w-12 h-12 bg-gray-800 rounded-full">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    {{ $fN['amount'] }}{{ $fN['unitName'] }}
                                </div>
                        </div>
                        <div class="ml-4 text-xs">{{ $fN['name'] }}</div>
                    </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>

@endsection
