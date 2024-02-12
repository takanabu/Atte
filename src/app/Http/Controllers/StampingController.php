<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;
use App\Models\BreakTime;

class StampingController extends Controller
{
    public function start_work(Request $request)
    {
        $attendance = new Attendance;
        $attendance->user_id = $request->user()->id; 
        $attendance->start_work = Carbon::now();
        $attendance->save();

        return redirect('/');
    }

    public function end_work(Request $request)
    {
        $attendance = Attendance::where('user_id', $request->user()->id)->latest()->first();
        $attendance->end_work = Carbon::now();
        $attendance->save();

         return redirect('/');
    }

    public function start_break(Request $request)
    {
        $attendance = Attendance::where('user_id', $request->user()->id)->latest()->first();
        $break = new BreakTime;
        $break->user_id = $request->user()->id;
        $break->attendance_id = $attendance->id;
        $break->start_break = Carbon::now();
        $break->save();

         return redirect('/');
    }

    public function end_break(Request $request)
    {
        $break = BreakTime::where('user_id', $request->user()->id)->latest()->first();
        $break->end_break = Carbon::now();
        $break->save();

         return redirect('/');
    }
}
