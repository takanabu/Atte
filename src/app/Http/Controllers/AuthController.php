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
    $start_work = $attendance && $attendance->start_work && !$attendance->end_work;
    $on_break = $break && $break->start_break && !$break->end_break;
    return view('index', compact('attendance', 'break', 'start_work', 'on_break'));
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
    // 勤務開始の処理をここに書く...
    // 例えば、新たな出勤レコードを作成する
    $attendance = new Attendance;
    $attendance->user_id = Auth::id();
    $attendance->start_work = now();
    $attendance->save();

    // 勤務開始フラグをセッションに保存
    $request->session()->put('start_work', true);

    // リダイレクト、レスポンス、またはビューを返す...
    return redirect('/');
}



}