@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto py-8">
    <h2 class="text-3xl font-bold text-center mb-6">Contact Information</h2>

    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold mb-4">Reach Out to Us</h3>
        
        <p class="mb-4 text-lg">We would love to hear from you! Feel free to get in touch for any inquiries, collaborations, or feedback.</p>

        <div class="space-y-4">
            <!-- Email -->
            <div class="flex items-center">
                <span class="font-bold text-xl w-24">Email:</span>
                <a href="mailto:ujjwalsharma7734@gmail.com" class="text-blue-600 hover:underline">ujjwalsharma7734@gmail.com</a>
            </div>

            <!-- Phone -->
            <div class="flex items-center">
                <span class="font-bold text-xl w-24">Phone:</span>
                <span>(+91) 9097576382</span>
            </div>

            <!-- YouTube Channel -->
            <div class="flex items-center">
                <span class="font-bold text-xl w-24">YouTube:</span>
                <a href="https://www.youtube.com/@alokpandey07/podcasts" target="_blank" class="text-blue-600 hover:underline">Alok Podcast Channel</a>
            </div>
        </div>
    </div>

    <div class="mt-8 text-center">
        <p class="text-lg font-medium">Feel free to reach out via the information above!</p>
    </div>
</div>
@endsection
