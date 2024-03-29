<?php

namespace App\Http\Controllers\agents_auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function RegistrationForm()
    {
        return view('agents_auth.register');
    }

    public function Register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'address' => 'required',
                'password' => 'required'
            ]
        );

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('agent');

        toast('The Agent has been created successfully!', 'success');

        return redirect()->route('admin.agents.index');
    }
}
