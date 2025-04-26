@extends('layout')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-100 via-pink-100 to-red-100 py-10">
    <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-indigo-600">Make a Payment</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</div>
        @endif

        @if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }} 
        <a href="{{ route('my-payments') }}" class="text-blue-600 underline ml-2">View Payment Status</a>
    </div>
@endif


        <form action="{{ route('payment.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block mb-1">Name</label>
                <input type="text" name="name" required class="w-full p-2 border rounded" />
            </div>

            <div class="mb-4">
                <label class="block mb-1">Email</label>
                <input type="email" name="email" required class="w-full p-2 border rounded" />
            </div>

            <div class="mb-4">
                <label class="block mb-1">Podcast Type</label>
                <select name="podcast_type" required class="w-full p-2 border rounded">
                    <option value="Tech">Tech</option>
                    <option value="Motivational">Motivational</option>
                    <option value="Business">Business</option>
                    <option value="Educational">Educational</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1">How many hours?</label>
                <input type="number" id="hours" name="hours" min="1" required class="w-full p-2 border rounded" />
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-bold text-indigo-700">Total Price (₹5000/hour)</label>
                <input type="text" id="totalPrice" name="price" readonly class="w-full p-2 border rounded bg-gray-100 font-semibold" />
            </div>

            <div class="mb-4">
                <label class="block mb-2">Scan this QR to pay</label>
                <img src="{{ asset('images/payment-qr.jpg') }}" alt="QR Code" class="rounded w-full max-w-xs mx-auto shadow" />
            </div>

            <div class="mb-6">
                <label class="block mb-1">Upload Payment Screenshot</label>
                <input type="file" name="screenshot" accept="image/*" required class="w-full p-2 border rounded" />
            </div>

            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded font-semibold">Submit Payment</button>
        </form>
    </div>
</div>

<script>
    const hoursInput = document.getElementById('hours');
    const priceInput = document.getElementById('totalPrice');
    const ratePerHour = 5000;

    hoursInput.addEventListener('input', () => {
        const hours = parseInt(hoursInput.value) || 0;
        priceInput.value = '₹' + (hours * ratePerHour).toLocaleString();
    });
</script>
@endsection
