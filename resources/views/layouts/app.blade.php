<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minerals</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center">
                <a href="/">
                    <img src="{{ asset('images/logo.svg') }}" alt="Minerals" class="w-32 flex-none">
                </a>
                <ul class="flex ml-8 space-x-5">
                    <li><a href="#" class="hover:text-gray-400">Dashboard</a></li>
                    <li><a href="#" class="hover:text-gray-400">Food</a></li>
                    <li><a href="#" class="hover:text-gray-400">Suggestions</a></li>
                </ul>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 focus:outline-none focus:shadow-outline px-3 py-1" placeholder="Search...">
                </div>
                <div class="ml-6">
                    <a href="#"><img src="{{ asset('images/orange-slice.png') }}" alt="orange" class="rounded-full w-8 h-8"></a>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t text-xs border-gray-800 ">
        <div class="container mx-auto text-center px-4 py-6">
            Powered By <a href="https://fdc.nal.usda.gov" target="_blank" class="underline hover:text-gray-400"> U.S. Department of Agriculture, Agricultural Research Service. FoodData Central, 2019.</a>
        </div>
    </footer>
</body>
</html>
