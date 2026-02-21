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

    public function sendInquiry(Request $request)
    {
        $request->validate([
            'n.Email' => 'required_without:n.email|email',
            'n.email' => 'required_without:n.Email|email',
            'InquiryAnswer' => 'required',
        ]);

        // Verify CAPTCHA
        $expected = session('captcha_answer');
        if ($request->input('InquiryAnswer') != $expected) {
            return back()->with('error', 'Incorrect CAPTCHA answer. Please try again.')->withInput();
        }

        $data = $request->input('n');
        
        // Normalize email key if necessary
        if (isset($data['Email'])) {
            $data['email'] = $data['Email'];
        }

        try {
            \Illuminate\Support\Facades\Mail::to('info@hajjumrahhub.co.uk')->send(new \App\Mail\InquiryMail($data));
            if ($request->ajax()) {
                return response()->json(['status' => 'success', 'message' => 'Thank you! Your inquiry has been sent successfully.']);
            }
            return back()->with('success', 'Thank you! Your inquiry has been sent successfully.');
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Mail sending failed: ' . $e->getMessage());
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'message' => 'Sorry, there was an error sending your inquiry. Please try again later.']);
            }
            return back()->with('error', 'Sorry, there was an error sending your inquiry. Please try again later.');
        }
    }

    public function getCaptcha()
    {
        $num1 = rand(1, 9);
        $num2 = rand(1, 9);
        $answer = $num1 + $num2;
        
        session(['captcha_answer' => $answer]);

        return response($num1 . ' + ' . $num2 . ' = ?');
    }
}
