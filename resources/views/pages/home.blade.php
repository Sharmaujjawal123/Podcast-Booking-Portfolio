@extends('layout')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-100 via-white to-pink-100 py-10 px-4">

    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-800">
            🎙️ Welcome to <span class="text-indigo-600">Alok Podcast Show</span>
        </h1>
        <p class="mt-3 text-lg text-gray-600">
            Dive into stories, insights, and inspiration from amazing guests!
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
        @php
            $guests = [
                [
                    'name'       => 'Dr Chirag Sharma Sir was my First Guest',
                    'btn'        => 'Watch Full Podcast on YouTube',
                    'video_id'   => 'TxndIkhwACc',
                    'youtube_url'=> 'https://www.youtube.com/watch?v=TxndIkhwACc&list=PLISrqHfmqNLxeT9OJRVccHPfo9tiqsDYM&index=1',
                ],
                [
                    'name'       => 'Flipkart Engineer - Nidhi Kunwar',
                    'btn'        => 'Listen on YouTube',
                    'video_id'   => 'trpklIUK-80',
                    'youtube_url'=> 'https://www.youtube.com/watch?v=trpklIUK-80&list=PLISrqHfmqNLxeT9OJRVccHPfo9tiqsDYM&index=2',
                ],
                [
                    'name'       => 'Placement Dean LPU - Mr Sami Anand Sir',
                    'btn'        => 'Watch on YouTube',
                    'video_id'   => '1qmisFrD7A4',
                    'youtube_url'=> 'https://www.youtube.com/watch?v=1qmisFrD7A4',
                ],

                [
                    'name'       => 'Amazon SDE Rahul Garg',
                    'btn'        => 'Watch on YouTube',
                    'video_id'   => 'hNxNXLKUdIc',
                    'youtube_url'=> 'https://youtu.be/3JZ_D3ELwOQ',
                ],
                [
                    'name'       =>  'Microsoft SDE Nishant Chahar',
                    'btn'        => 'Watch on YouTube',
                    'video_id'   => 'de7qGcxXFc8',
                    'youtube_url'=> 'https://www.youtube.com/watch?v=de7qGcxXFc8',
                ],
                [
                    'name'       =>  'Senior Dean Of LPU Dr Sorabh Lakhanpal Sir',
                    'btn'        => 'Watch on YouTube',
                    'video_id'   => '-bhEblY3WUQ',
                    'youtube_url'=> 'https://www.youtube.com/watch?v=-bhEblY3WUQ&list=PLISrqHfmqNLxeT9OJRVccHPfo9tiqsDYM&index=10',
                ],
                // … add the rest in the same format …
            ];
        @endphp

        @foreach ($guests as $guest)
            <div class="bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition duration-300">
                <div class="w-full h-56 mb-4 overflow-hidden rounded-xl shadow-inner">
                    <iframe 
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/{{ $guest['video_id'] }}?rel=0" 
                        title="{{ $guest['name'] }}" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $guest['name'] }}</h2>
                <a 
                    href="{{ $guest['youtube_url'] }}" 
                    target="_blank" 
                    class="inline-block mt-2 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition">
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
