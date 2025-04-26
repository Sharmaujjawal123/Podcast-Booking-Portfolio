<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alok Podcast Show</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800">
<nav class="bg-gray-900 text-white px-6 py-4 shadow-md">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center space-y-3 sm:space-y-0">
        <!-- Left Nav -->
        <div class="flex items-center space-x-6">
            <a href="/" class="text-2xl font-bold text-indigo-400 hover:text-indigo-300 transition">Alok Podcast Show</a>
            <a href="/video-cv" class="hover:text-indigo-400 transition">Video CV</a>
            <a href="/payment-form" class="hover:text-indigo-400 transition">Payment Form</a>

            <a href="/contact" class="hover:text-indigo-400 transition">Contact</a>
            @auth
    <a href="{{ route('my-payments') }}" class="text-blue-600 hover:underline">My Payments</a>
@endauth
        </div>
        @auth
    @if(auth()->user()->email === 'youradminemail@example.com')
        <a href="{{ route('admin.payments') }}" class="text-red-400 hover:underline ml-4">Admin Payments</a>
    @endif
@endauth


        <!-- Right Nav -->
        <div class="flex items-center space-x-2">
            <!-- Search -->
            <form action="{{ route('search') }}" method="GET" class="flex">
                <input type="text" name="query" placeholder="Search" class="rounded-l px-3 py-1 text-black focus:outline-none" required>
                <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white px-3 py-1 rounded-r transition">Search</button>
            </form>
        

            <!-- Auth Buttons -->
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded transition">Logout</button>
            </form>
            @endauth

            @guest
            <a href="{{ route('login') }}" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded transition">Login</a>
            <a href="{{ route('register') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded transition">SignUp</a>
            @endguest
        </div>
    </div>
</nav>

    @yield('content')
</body>
</html>
