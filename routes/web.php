<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
Route::get('/', [HomeController::class, 'index']);
Route::get('/video-cv', [PageController::class, 'videoCv']);
//Route::get('/payment-form', [PageController::class, 'paymentForm']);
Route::get('/skills', [PageController::class, 'skills']);
Route::get('/contact', [PageController::class, 'contact']);

use App\Http\Controllers\PaymentController;
Route::get('/payment-form', [\App\Http\Controllers\PaymentController::class, 'show'])->name('payment.form');
Route::post('/payment-submit', [\App\Http\Controllers\PaymentController::class, 'submit'])->name('payment.submit');

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doRegister']);

use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/')->with('success', 'Logged out successfully!');
})->name('logout');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');

Route::get('/my-payments', [PaymentController::class, 'userPayments'])->middleware('auth')->name('my-payments');



//Admin features
use App\Http\Controllers\AdminController;

Route::get('/admin/payments', [AdminController::class, 'index'])->name('admin.payments');
Route::post('/admin/payments/{id}/verify', [AdminController::class, 'verify'])
->name('admin.payments.verify');
//Route::middleware(['auth', 'admin'])->group(function () {
  //  Route::get('/admin/payments', [AdminController::class, 'index'])->name('admin.payments');
//});

