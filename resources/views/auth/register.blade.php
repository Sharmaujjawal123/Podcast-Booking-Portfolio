@extends('layout')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6">Sign Up</h2>

    {{-- Error messages block --}}
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" class="w-full mb-4 p-2 border rounded" required>
        <input type="email" name="email" placeholder="Email" class="w-full mb-4 p-2 border rounded" required>
        <input type="password" name="password" placeholder="Password" class="w-full mb-4 p-2 border rounded" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full mb-4 p-2 border rounded" required>
        <button class="w-full bg-green-600 text-white p-2 rounded">Register</button>
    </form>
</div>
@endsection
