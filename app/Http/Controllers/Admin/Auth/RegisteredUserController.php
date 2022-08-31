<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Events\AdminRegisterEvent;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Customer;
use App\Providers\RouteServiceProvider;
use Database\Factories\AdminFactory;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return 1;
        return view('Backend.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            //'phone' => 'required|string|min:8|max:11',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

         $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            //'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        //event(new AdminRegisterEvent($admin));

        if ( Auth::guard('admin')->login($admin)) {
            $request->session()->regenerate();
            return redirect(RouteServiceProvider::ADMIN_HOME);
        } 
        else {
            return back()->withErrors(['email' => 'Something is wrong!!']);
        }
    }
}
