@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto py-10 text-center">

    <h2 class="text-3xl font-bold mb-6">Watch Alok Podcast Videos</h2>

    <!-- Embed a YouTube video -->
    <div class="mb-8">
        <iframe class="w-full h-64 md:h-96 rounded-lg shadow" 
                src="https://www.youtube.com/embed/m7jdCpy6viM?autoplay=1&mute=1&rel=0" 
                title="Alok Podcast Sample" 
                frameborder="0" 
                allow="autoplay; encrypted-media" 
                allowfullscreen>
        </iframe>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <iframe class="w-full h-64 rounded-lg shadow"
                src="https://www.youtube.com/embed/GRrEUlg8TgI?rel=0"
                title="Podcast Video 2"
                frameborder="0"
                allow="encrypted-media"
                allowfullscreen>
        </iframe>

        <iframe class="w-full h-64 rounded-lg shadow"
                src="https://www.youtube.com/embed/3GKLjXgo-_4?rel=0"
                title="Podcast Video 3"
                frameborder="0"
                allow="encrypted-media"
                allowfullscreen>
        </iframe>
    </div>

    <!-- Link to full channel -->
    <div class="text-center mt-10">
        <a href="https://www.youtube.com/@alokpandey07/podcasts" target="_blank"
           class="inline-block bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition">
            🎥 See More on Alok Podcast YouTube Channel
        </a>
    </div>
</div>
@endsection
