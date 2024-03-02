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
        $isWorking = $attendance && $attendance->start_work && !$attendance->end_work;
        $on_break = $break && $break->start_break && !$break->end_break;
        return view('index', compact('attendance', 'break', 'isWorking', 'on_break'));
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

    public function startWork(Request $request)
    {
        $attendance = new Attendance;
        $attendance->user_id = Auth::id();
        $attendance->start_work = now();
        $attendance->save();

        $request->session()->put('start_work', true);

        return redirect('/');
    }

    public function endWork(Request $request)
    {
        $attendance = Attendance::where('user_id', Auth::id())->latest()->first();
        if ($attendance && $attendance->start_work && !$attendance->end_work) {
            $attendance->end_work = now();
            $attendance->save();
        }
        return redirect('/');
    }

    public function startBreak(Request $request)
    {
        $break = new BreakTime;
        $break->user_id = Auth::id();
        $break->start_break = now();
        $break->save();
        return redirect('/');
    }

    public function endBreak(Request $request)
    {
        $break = BreakTime::where('user_id', Auth::id())->latest()->first();
        if ($break && $break->start_break && !$break->end_break) {
            $break->end_break = now();
            $break->save();
        }
        return redirect('/');
    }
}
