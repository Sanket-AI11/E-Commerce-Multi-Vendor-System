<?php

use App\Http\Controllers\Frontend\KycController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\VendorDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home.index');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'passwordUpdate'])->name('password.update');


    // KYC Routes
    Route::get('/kyc-verification', [KycController::class, 'index'])->name('kyc.index');
    // Route::post('/kyc', [KycController::class, 'kycSubmit'])->name('kyc.submit');
});

// Vendor Routes
Route::group(['prefix' => 'vendor', 'as' => 'vendor.', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [VendorDashboardController::class, 'index'])->name('dashboard');
});


// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard.index');
// })->middleware(['auth:admin', 'verified'])->name('admin.dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
