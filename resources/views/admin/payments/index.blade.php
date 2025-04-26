<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Payments</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-600 text-white p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="text-lg font-bold">Dashboard</a>
            <ul class="flex space-x-4">
                <li><a href="{{ route('admin.payments') }}" class="hover:text-gray-300">Payments</a></li>
                <div class="flex justify-end mb-4">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button
            type="submit"
            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
            Logout
        </button>
    </form>
</div>

            </ul>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto py-8">
        <h2 class="text-2xl font-bold mb-6">All Payments</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border p-2">User</th>
                    <th class="border p-2">Email</th>
                    <th class="border p-2">Podcast Type</th>
                    <th class="border p-2">Hours</th>
                    <th class="border p-2">Amount</th>
                    <th class="border p-2">Status</th>
                    <th class="border p-2">Screenshot</th>
                    <th class="border p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td class="border p-2">{{ $payment->name }}</td>
                        <td class="border p-2">{{ $payment->email }}</td>
                        <td class="border p-2">{{ $payment->podcast_type }}</td>
                        <td class="border p-2">{{ $payment->hours }}</td>
                        <td class="border p-2">₹{{ $payment->amount }}</td>
                        <td class="border p-2">
                            @if($payment->status === 'success')
                                <span class="text-green-600 font-bold">Verified</span>
                            @else
                                <span class="text-yellow-600">Pending</span>
                            @endif
                        </td>
                        <td class="border p-2">
                            <a href="{{ asset('storage/' . $payment->screenshot) }}" target="_blank" class="text-blue-600 underline">View</a>
                        </td>
                        <td class="border p-2">
                            @if($payment->status !== 'success')
                            <form action="{{ route('admin.payments.verify', $payment->id) }}" method="POST">
                                @csrf
                                <button class="bg-green-600 text-white px-3 py-1 rounded">Verify</button>
                            </form>
                            @else
                                <span class="text-gray-400">Done</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer class="bg-blue-600 text-white py-4 mt-8">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; 2024 Alok Podcast Show. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
