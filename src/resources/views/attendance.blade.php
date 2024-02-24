<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/attendance.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
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
                <!-- 前へボタン -->
                <button class="btn btn-primary">
                    <i class="bi bi-arrow-left"></i>
                </button>

                <h2 class="date">{{ $attendance->date }}</h2>

                <!-- 次へボタン -->
                <button class="btn btn-primary">
                    <i class="bi bi-arrow-right"></i>
                </button>

                @if ($attendances->hasMorePages())
                    <a href="{{ $attendances->nextPageUrl() }}" class="next"></a>
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
            {{ $attendance->records->links('vendor.pagination.tailwind2') }}
        @endforeach
    </div>
    <footer>
        <p class="center-text">Atte, Inc.</p>
    </footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
