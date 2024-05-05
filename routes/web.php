<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;

Route::post('/donate', [DonationController::class, 'processDonation'])->name('donate.store');
Route::get('/thank_you', [DonationController::class, 'thankYou'])->name('thank_you');
Route::get('/', function () {
    return view('welcome');
});
