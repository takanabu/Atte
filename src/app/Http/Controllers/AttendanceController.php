<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
{
    $attendances = Attendance::with('breakTimes')->paginate(5);

    foreach ($attendances as $attendance) {
        $totalBreakTime = 0;
        foreach ($attendance->breakTimes as $break) {
            $start = new \DateTime($break->start_break);
            $end = new \DateTime($break->end_break);
            $totalBreakTime += $start->diff($end)->i;  // 分単位での差分を取得
        }
        $attendance->total_break_time = $totalBreakTime / 60;  // 分単位の休憩時間を時間単位に変換
    }

    return view('attendance', compact('attendances'));
}
}
