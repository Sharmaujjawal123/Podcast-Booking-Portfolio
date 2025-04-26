@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">My Payments</h2>

    @if($payments->count())
        <table class="w-full border rounded bg-white shadow">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 text-left">Podcast Type</th>
                    <th class="p-2 text-left">Hours</th>
                    <th class="p-2 text-left">Amount</th>
                    <th class="p-2 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                    <tr class="border-t">
                        <td class="p-2">{{ $payment->podcast_type }}</td>
                        <td class="p-2">{{ $payment->hours }}</td>
                        <td class="p-2">₹{{ $payment->amount }}</td>
                        <td class="p-2">
                            @if($payment->status === 'pending')
                                <span class="text-yellow-500 font-semibold">Pending</span>
                            @else
                                <span class="text-green-600 font-semibold">Success</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>You haven't made any payments yet.</p>
    @endif
</div>
@endsection
