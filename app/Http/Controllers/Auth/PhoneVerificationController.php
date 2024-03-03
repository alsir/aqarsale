<?php

namespace App\Http\Controllers\Auth;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PhoneVerificationController extends Controller
{
    public function sendVerificationCode(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|numeric',
            'name' => 'required|string',
        ]);

        // Generate and send verification code via SMS (using Twilio or any other service)

        // Session::put('verification_code', $verificationCode);
    }

    public function verifyPhoneNumber(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|numeric',
            'verification_code' => 'required|numeric'
        ]);

        $verificationCode = Session::get('verification_code');

        if ($verificationCode === $request->verification_code) {
            Session::forget('verification_code');
            $customer = Customer::firstOrCreate(['phone_number' => $request->phone_number]);
            Auth::login($customer);
            
            return redirect('/NewPassword'); // Redirect to authenticated page
        } else {
            return back()->withErrors(['verification_code' => 'Invalid verification code']);
        }
    }
}
