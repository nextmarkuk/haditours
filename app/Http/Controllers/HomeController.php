<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function termsConditions()
    {
        return view('terms-and-conditions');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function paymentSecurity()
    {
        return view('payment-security');
    }

    public function cookiesPolicy()
    {
        return view('cookie-policy');
    }

    public function hajj()
    {
        return view('hajj');
    }

    public function umrahVisa()
    {
        return view('umrah-visa');
    }

    public function umrahPackages()
    {
        return view('umrah-packages');
    }

    public function umrahPackages2026()
    {
        return view('umrah-packages-2026');
    }

    public function decemberUmrahPackages()
    {
        return view('december-umrah-packages');
    }

    public function ramadanUmrah()
    {
        return view('ramzan-umrah-packages');
    }

    public function easterUmrahPackages()
    {
        return view('easter-umrah-packages');
    }

    public function birminghamUmrah()
    {
        return view('birmingham-umrah-packages');
    }
}
