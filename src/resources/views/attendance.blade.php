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
                <th>勤務開始</th>
                <th>勤務終了</th>
                <th>休憩開始</th>
                <th>休憩終了</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
            <tr>
                <td>{{ $attendance->start_work }}</td>
                <td>{{ $attendance->end_work }}</td>
                <td>{{ $attendance->start_break }}</td>
                <td>{{ $attendance->end_break }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $attendances->links() }}
</div>
 <p>Atte, Inc.</p>

 </body>
</html>
