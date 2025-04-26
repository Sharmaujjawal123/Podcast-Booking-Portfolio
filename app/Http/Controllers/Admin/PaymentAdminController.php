<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;

class PaymentAdminController extends Controller
{
    // Display all payments
    public function index()
    {
        $payments = Payment::all();
        return view('admin.payments.index', compact('payments'));
    }

    // Verify the payment
    public function verify($id)
    {
        $payment = Payment::find($id);
        if ($payment) {
            $payment->status = 'Verified'; // Or any status you'd like
            $payment->save();
        }

        return redirect()->route('admin.payments');
    }
}
