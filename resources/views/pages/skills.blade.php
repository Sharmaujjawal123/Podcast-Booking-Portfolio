<!-- resources/views/layouts/navbar.blade.php -->
<nav class="bg-gray-800 p-4">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <div class="text-white text-lg font-semibold">
            <a href="{{ route('home') }}" class="hover:text-gray-400">Home</a>
        </div>

        <div class="flex space-x-4">
            <!-- Skills Dropdown -->
            <div class="relative">
                <button class="text-white hover:text-gray-400 focus:outline-none" aria-haspopup="true" aria-expanded="false">
                    Skills
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </button>
                <!-- Dropdown Menu -->
                <div class="absolute right-0 mt-2 w-48 bg-white text-gray-800 shadow-lg rounded-md hidden group-hover:block">
                    <ul class="py-2">
                        @foreach(['Voice Modulation', 'Script Writing', 'Audio Editing', 'Interview Hosting', 'Storytelling', 'Public Speaking', 'Sound Engineering Basics', 'Social Media Promotion', 'Guest Coordination', 'Content Planning', 'Podcast Marketing', 'Basic Video Editing'] as $skill)
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-200">{{ $skill }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Other Nav Items -->
            <a href="{{ route('about') }}" class="text-white hover:text-gray-400">About</a>
            <a href="{{ route('contact') }}" class="text-white hover:text-gray-400">Contact</a>
        </div>
    </div>
</nav>
