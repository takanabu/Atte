<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Attendance;
use DB;

class AttendanceController extends Controller
{
    public function index()
    {   
        $attendances = Attendance::with('breakTimes')
        ->select(DB::raw('date(start_work) as date'), DB::raw('count(*) as count'))
        ->groupBy('date')
        ->orderBy('date', 'desc')
        ->paginate(1);
        
        foreach ($attendances as $attendance) {
            $records = Attendance::with('breakTimes')
            ->whereDate('start_work', $attendance->date)
            ->get(); 
            
            $attendance->records = $records;
            
            foreach ($records as $record) {
                $totalBreakTime = 0;
                foreach ($record->breakTimes as $break) {
                    $start = new \DateTime($break->start_break);
                    $end = new \DateTime($break->end_break);
                    $totalBreakTime += $start->diff($end)->i;  
                }
                $record->total_break_time = $totalBreakTime / 60;  
            }
        }
        
        return view('attendance', compact('attendances'));
    }
}
