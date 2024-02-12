<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;
use App\Models\BreakTime;

class AuthController extends Controller

{
    public function index()
{
        $attendance = Attendance::where('user_id', Auth::id())->latest()->first();
        $break = BreakTime::where('user_id', Auth::id())->latest()->first();
        return view('index', compact('attendance', 'break'));
}

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            
            return redirect()->intended('/');
        }

            return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}