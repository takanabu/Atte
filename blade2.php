
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
    @foreach ($attendances as $attendance)
        <div class="pagination">
            @if (!$attendances->onFirstPage())
                <a href="{{ $attendances->previousPageUrl() }}" class="prev">＜</a>
            @endif

            <h2 class="date">{{ $attendance->date }}</h2>

            @if ($attendances->hasMorePages())
                <a href="{{ $attendances->nextPageUrl() }}" class="next">＞</a>
            @endif
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>  
                    <th>勤務時間</th>  
                </tr>
            </thead>
            <tbody>
                @foreach ($attendance->records as $record)
                    <?php 
                        $startWork = new DateTime($record->start_work);
                        $endWork = new DateTime($record->end_work);
                        $workHours = ($endWork->getTimestamp() - $startWork->getTimestamp())/3600;
                    ?>
                    <tr> 
                        <td>{{ $record->user->name }}</td>
                        <td>{{ $startWork->format('H:i:s') }}</td> 
                        <td>{{ $endWork->format('H:i:s') }}</td>
                        <td>{{ number_format($record->total_break_time, 2) }} 時間</td> 
                        <td>{{ number_format($workHours, 2) }} 時間</td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    @endforeach
</div>
{{ $attendances->links() }} 
<p>Atte, Inc.</p>
</body>
</html>
