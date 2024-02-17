<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::paginate(5);
        return view('attendance', compact('attendances'));
    }

    public function store(Request $request)
    {
        // 勤務開始終了、休憩開始終了の更新処理をここに書く
    }
}
