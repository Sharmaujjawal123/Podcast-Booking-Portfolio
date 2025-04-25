<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function videoCv() {
        return view('pages.video-cv');
    }

    public function paymentForm() {
        return view('pages.payment-form');
    }

    public function skills() {
        return view('pages.skills');
    }

    public function contact() {
        return view('pages.contact');
    }
}

