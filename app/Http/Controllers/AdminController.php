<?php

namespace App\Http\Controllers;

use App\Models\Payment; // or any model you need for payments
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all payments or any other admin-specific data
        $payments = Payment::all(); // or any other logic you need here

        return view('admin.payments.index', compact('payments'));
    }
    public function verify($id)
    {
        // Find the payment record by its ID
        $payment = Payment::findOrFail($id);

        // Update the status to 'success' when verified
        $payment->status = 'success';
        $payment->save();

        // Optionally, you could send an email or notify the user that their payment is verified
        // Mail::to($payment->email)->send(new PaymentVerifiedMail($payment));

        // Redirect back with a success message
        return redirect()->route('admin.payments')->with('success', 'Payment verified successfully!');
    }
}

