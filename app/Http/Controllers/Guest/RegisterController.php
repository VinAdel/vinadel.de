<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\Guest\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
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
        return view('Guest.register');
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            "name" => $request->name,
            "password" => Hash::make($request->password)
        ]);

        return redirect()->route('guest.login');
    }
}
