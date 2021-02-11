<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\Guest\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct() 
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('Guest.login');
    }

    public function login(LoginRequest $request)
    {
        Auth::attempt([
            "name" => $request->name,
            "password" => $request->password
        ], $request->remember ? true : false);

        return redirect()->route('auth.dashboard');
    }
}