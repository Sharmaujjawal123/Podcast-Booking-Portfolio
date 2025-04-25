@extends('layout')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-100 via-white to-pink-100 py-10 px-4">

    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-800">🎙️ Welcome to <span class="text-indigo-600">Alok Podcast Show</span></h1>
        <p class="mt-3 text-lg text-gray-600">Dive into stories, insights, and inspiration from amazing guests!</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
        @php
            $guests = [
                [
                    'name' => 'Dr Chirag Sharma Sir was my First Guest',
                    'btn' => 'Watch Full Podcast on My Youtube>>',
                    'img' => 'https://i.ibb.co/WP2wBQt/chirag-sharma.jpg'
                ],
                [
                    'name' => 'Flipkart Engineer - Nidhi Kunwar',
                    'btn' => 'Listen Nidhi Kunwar »',
                    'img' => 'https://i.ibb.co/zVYBxdB/nidhi-kunwar.jpg'
                ],
                [
                    'name' => 'Placement Dean LPU - Mr Sami Anand Sir',
                    'btn' => 'Watch Sami Anand Sir »',
                    'img' => 'https://i.ibb.co/hWzLbqh/sami-anand.jpg'
                ],
                [
                    'name' => 'Microsoft SDE Nishant Chahar',
                    'btn' => 'Watch Full Podcast on My Youtube>>',
                    'img' => 'https://i.ibb.co/wJWqZmT/nishant-chahar.jpg'
                ],
                [
                    'name' => 'Senior Dean Of LPU Dr Sorabh Lakhanpal Sir',
                    'btn' => 'Watch Full Podcast »',
                    'img' => 'https://i.ibb.co/d4B0M8c/sorabh-lakhanpal.jpg'
                ],
                [
                    'name' => 'Amazon SDE Rahul Garg',
                    'btn' => 'Watch Full Podcast »',
                    'img' => 'https://i.ibb.co/h1yDdJK/rahul-garg.jpg'
                ],
            ];
        @endphp

@foreach ($guests as $guest)
<div class="bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
    <img src="{{ $guest['img'] }}" alt="{{ $guest['name'] }}" class="rounded-xl w-full h-56 object-cover mb-4">
    <h2 class="text-lg font-semibold text-gray-800">{{ $guest['name'] }}</h2>
    <a href="#" class="inline-block mt-3 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition">
        {{ $guest['btn'] }}
    </a>
</div>
@endforeach

    </div>

    <footer class="mt-16 text-center text-sm text-gray-600">
        <div class="flex justify-center space-x-6 mb-2">
            <a href="#" class="hover:text-indigo-600">Home</a>
            <a href="#" class="hover:text-indigo-600">Features</a>
            <a href="#" class="hover:text-indigo-600">Pricing</a>
            <a href="#" class="hover:text-indigo-600">FAQs</a>
            <a href="#" class="hover:text-indigo-600">About</a>
        </div>
        <div>© 2024 Alok, India</div>
    </footer>
</div>
@endsection
