@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="food-item border-b border-gray-800 pb-12 flex"
    x-data="{ isFullListVisible: false }">
        <div class="flex-none w-1/2">
            <img src="{{ $image['photos'][0]['src']['medium'] }} ?? /public/images/apple.jpg" alt="Appleee" class="rounded-lg">
        </div>
        <div class="ml-12">
            <h2 class="font-semibold text-2xl">{{ $food[0]['description'] ?? 'Name Here' }}</h2>
            <h4 class="font-semibold uppercase border-b border-gray-800 text-gray-400 text-xs">per serving:</h4>
            <div class="flex flex-wrap items-center space-x-12">
                <div class="flex flex-col items-left">
                    @forelse($fNs as $fN)
                    @if ($loop->index < 5) <div class="flex flex-row items-center py-2">
                        <div class="w-12 h-12 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                {{ $fN['amount'] }}{{ $fN['unitName'] }}
                            </div>
                        </div>
                        <div class="ml-4 text-xs">{{ $fN['name'] }}</div>
                </div>
                @endif
                @empty
                <div class="flex flex-row items-center py-2">
                    <div class="w-12 h-12 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            0
                        </div>
                    </div>
                    <div class="ml-4 text-xs">Sorry,<br>No data</div>
                </div>
                @endforelse
                <div class="flex flex-row items-center py-2">
                    <button 
                    @click="isFullListVisible = true"
                    class="w-12 h-12 bg-gray-800 rounded-full">
                        <div class="font-semibold text-2xl flex justify-center items-center h-full">
                            +
                        </div>
                    </button>
                    <div class="ml-4 text-xs">Show more...</div>
                </div>
            </div>
        </div>

        @if ($fNs)
        <div 
        x-show="isFullListVisible"
        style="background-color: rgba(0, 0, 0, .5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                <div class="bg-gray-900 rounded">
                    <div class="flex justify-end px-4 pt-2">
                        <button 
                        @click="isFullListVisible = true"
                        @keydown.escape.window="isFullListVisible = false"
                        class="text-3xl leading-none hover:text-gray-300">&times;</button>
                    </div>
                    <div class="modal-body px-8 py-8 flex flex-wrap items-center space-x-12">
                        <div class="responsive-container content-center relative">
                            @forelse($fNs as $fN)
                            <div class="flex flex-row items-center py-2">
                                <div class="w-12 h-12 bg-gray-800 rounded-full">
                                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                                        {{ $fN['amount'] }}{{ $fN['unitName'] }}
                                    </div>
                                </div>
                                <div class="ml-4 text-xs">{{ $fN['name'] }}</div>
                            </div>
                            @empty
                            <div class="flex flex-row items-center py-2">
                                <div class="w-12 h-12 bg-gray-800 rounded-full">
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