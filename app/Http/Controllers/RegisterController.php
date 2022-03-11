<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }
    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        auth()->login($user);

        // redirect()->back()->with('message', 'Account successfully registered.');

        return redirect('/register')->with('success', "Account successfully registered.");
    }
}
