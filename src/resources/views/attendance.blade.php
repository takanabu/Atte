<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <a href="/">Atte</a>
        </div>
        <div class="nav-right">
            <a href="/">ホーム</a>
            <a href="/dates">日付一覧</a>
            <a href="/logout">ログアウト</a>
        </div>
    </nav>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <tr>
                   <th>名前</th>
                   <th>勤務開始</th>
                   <th>勤務終了</th>
                   <th>休憩時間</th>  
                   <th>勤務時間</th>  
           </tr>
               </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
            <?php 
               // 勤務時間と休憩時間を計算
               $workHours = (strtotime($attendance->end_work) - strtotime($attendance->start_work))/3600;
               $breakHours = (strtotime($attendance->end_break) - strtotime($attendance->start_break))/3600;
            ?>
            <tr>
                <td>{{ $attendance->user->name }}</td>
                <td>{{ $attendance->start_work }}</td>
                <td>{{ $attendance->end_work }}</td>
                <td>{{ number_format($attendance->total_break_time, 2) }} 時間</td> 
                <td>{{ number_format($workHours, 2) }} 時間</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $attendances->links() }}
</div>
 <p>Atte, Inc.</p>

 </body>
</html>
