<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body  class="bg-[#f5f5f5]">
    <header class="bg-white shadow">
        <nav class="flex flex-wrap items-center justify-around px-6 py-4">
            <ul class="flex items-center gap-x-10 text-sm font-medium">
                <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ url('/devlog') }}" class="hover:underline">Devlog</a></li>
                <li><a href="{{ url('/donation') }}" class="hover:underline">Donation</a></li>
            </ul>
            <div>
                <img src="{{ asset('assets/logo_furs.png') }}" alt="Logo" class="h-10">
            </div>
            <ul class="flex items-center gap-x-6 text-sm font-medium">
                <li><a href="{{ url('/signin') }}" class="hover:underline">Sign In</a></li>
                <li><a href="{{ url('/signup') }}" class="bg-[#2e7d32] px-8 py-2 rounded-full text-white font-semibold hover:bg-[#284e2a] transition-all ease-in cursor-pointer">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    <div>
        <main>
            @yield('content')
        </main>
    </div>

</body>

</html>