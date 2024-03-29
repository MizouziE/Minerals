@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="food-item border-b border-gray-800 pb-12 flex"
    x-data="{ isFullListVisible: false }">
        <div class="flex-none w-1/2 aspect-square h-full">
            <img src="{{ $food['image'] }} ?? /public/images/apple.jpg" alt="Appleee" class="rounded-lg h-full w-full object-cover object-center">
        </div>
        <div class="ml-12">
            <h2 class="font-semibold text-2xl">{{ $food[0]['description'] ?? 'Name Here' }}</h2>
            <h4 class="font-semibold uppercase border-b border-gray-800 text-gray-400 text-xs mb-2">per serving:</h4>
            <div class="flex flex-wrap items-center space-x-12">
                <div class="flex flex-col items-left">
                    @forelse($food[0]['foodNutrients'] as $fN)
                    @if ($loop->index < 5) <div class="flex flex-row items-center py-0.5">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                {{ $fN['amount'] }}{{ $fN['unitName'] }}
                            </div>
                        </div>
                        <div class="ml-4 text-xs">{{ $fN['name'] }}</div>
                </div>
                @endif
                @if ($loop->last)
                <div class="flex flex-row items-center py-0.5">
                    <button
                    @click="isFullListVisible = true"
                    class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-2xl flex justify-center items-center h-full">
                            +
                        </div>
                    </button>
                    <div class="ml-4 text-xs">Show {{ count($food[0]['foodNutrients'])-5 }} more...</div>
                </div>
                @endif
                @empty
                <div class="flex flex-row items-center py-0.5">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            0
                        </div>
                    </div>
                    <div class="ml-4 text-xs">Sorry,<br>No data</div>
                </div>
                @endforelse
            </div>
        </div>

        @if ($food[0]['foodNutrients'])
        <div
        x-show="isFullListVisible"
        style="background-color: rgba(0, 0, 0, .5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
            <div class="container mx-auto h-3/4 w-auto lg:px-32 rounded-lg overflow-y-auto">
                <div class="bg-gray-900 rounded">
                    <div class="flex justify-end px-4 pt-2">
                        <button
                        @click="isFullListVisible = false"
                        @keydown.escape.window="isFullListVisible = false"
                        class="text-3xl leading-none hover:text-gray-300 fixed">&times;</button>
                    </div>
                    <div class="modal-body px-8 py-8 flex flex-col flex-wrap items-center space-x-12">
                        <h4 class="font-semibold uppercase border-b border-gray-800 text-gray-400 text-xs mb-2">per serving:</h4>
                        <div class="responsive-container content-center relative">
                            @forelse($food[0]['foodNutrients'] as $fN)
                            <div class="flex flex-row items-center py-0.5">
                                <div class="w-16 h-16 bg-gray-800 rounded-full">
                                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                                        {{ $fN['amount'] }}{{ $fN['unitName'] }}
                                    </div>
                                </div>
                                <div class="ml-4 text-xs">{{ $fN['name'] }}</div>
                            </div>
                            @empty
                            <div class="flex flex-row items-center py-0.5">
                                <div class="w-16 h-16 bg-gray-800 rounded-full">
                                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                                        0
                                    </div>
                                </div>
                                <div class="ml-4 text-xs">Sorry,<br>No data</div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
</div>

@endsection
