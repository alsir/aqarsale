<?php

namespace App\Http\Controllers\Auth;

use Rules\Password;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\customerLogin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;

class CustomerController extends Controller
{
    public function create()
    {
        return view('frontend.auth.signup');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($customer));

        Auth::login($customer);

        return redirect('/');
    }
    public function update_profile(Request $request)
    {
        $customer = Customer::find(Auth::id());
        $customer->name = $request->name;
        $customer->phone_number = $request->phone_number;
        $customer->update();

        toastr()->success('تم تعديل المستخدم بنجاح !!');
        return back();
    }

    public function update_password(Request $request)
    {
        $customer = Customer::find(Auth::id());
        $customer->password = Hash::make($request->password);
        $customer->update();

        toastr()->success('تم تعديل كلمة السر بنجاح !!');
        return back();
    }
    
    public function login(customerLogin $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended('/');
    }
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
