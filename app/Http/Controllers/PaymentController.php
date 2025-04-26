<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\PaymentReceived;
use App\Models\Payment;


class PaymentController extends Controller
{
    public function show()
    {
        return view('pages.payment-form');
    }

    public function userPayments()
{
    $payments = Payment::where('user_id', auth()->id())->latest()->get();
    return view('pages.my-payments', compact('payments'));
}


    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'podcast_type' => 'required|string',
            'hours' => 'required|integer|min:1',
            'screenshot' => 'required|image|max:2048',
        ]);
        $pricePerHour = 5000;
        $totalAmount = $request->hours * $pricePerHour;

        $screenshot = $request->file('screenshot');
        $screenshotPath = $screenshot->store('payments', 'public');
        $payment = Payment::create([
    'user_id' => auth()->id(),
    'name' => $request->name,
    'email' => $request->email,
    'podcast_type' => $request->podcast_type,
    'hours' => $request->hours,
    'amount' => $totalAmount,
    'screenshot' => $screenshotPath,
    'status' => 'pending',
]);
       

        Mail::to('ujjawalsharma7734@gmail.com')->send(
            new PaymentReceived(
                $request->name,
                $request->email,
                $screenshotPath,
                $request->podcast_type,
                $request->hours,
                $totalAmount
            )
        );

        return back()->with('success', 'Payment submitted successfully! Our team will verify the details and get in touch with you shortly.');

    }
}
