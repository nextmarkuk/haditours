<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/reviews', [HomeController::class, 'reviews'])->name('reviews');
Route::get('/terms-conditions', [HomeController::class, 'termsConditions'])->name('termsConditions');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/payment-security', [HomeController::class, 'paymentSecurity'])->name('paymentSecurity');
Route::get('/cookies-policy', [HomeController::class, 'cookiesPolicy'])->name('cookiesPolicy');
Route::get('/cheap-hajj-packages', [HomeController::class, 'hajj'])->name('hajj');
Route::get('/umrah-visa', [HomeController::class, 'umrahVisa'])->name('umrahVisa');
Route::get('/umrah-packages', [HomeController::class, 'umrahPackages'])->name('umrahPackages');
Route::get('/umrah-packages-2026', [HomeController::class, 'umrahPackages2026'])->name('umrahPackages2026');
Route::get('/december-umrah-packages', [HomeController::class, 'decemberUmrahPackages'])->name('decemberUmrahPackages');
Route::get('/umrah-in-ramadan', [HomeController::class, 'ramadanUmrah'])->name('ramadanUmrah');
Route::get('/easter-umrah-packages', [HomeController::class, 'easterUmrahPackages'])->name('easterUmrahPackages');
Route::get('/birmingham-umrah-packages', [HomeController::class, 'birminghamUmrah'])->name('birminghamUmrah');

// Package-Detail
Route::get('/umrah/{slug}', [PackageDetailController::class, 'show'])->name('umrahDetail');