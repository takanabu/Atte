<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
    
          <h2>{{ Auth::user()->name }}さんお疲れ様です！</h2>

          <div class="row">
             <div class="column">
                <div class="card">
                    <form method="POST" action="/work/start">
                        @csrf
                        <button type="submit" class="btn">勤務開始</button>
                    </form>
                </div>
             </div>
          </div>
          <div class="column">
              <div class="card">
                  <form method="POST" action="/work/end">
                       @csrf
                       <button type="submit" class="btn" {{ $attendance && $attendance->start_work ? '' : 'disabled' }}>勤務終了</button>
                  </form>
              </div>
          </div>

          <div class="column">
              <div class="card">
                  <form method="POST" action="/break/start">
                      @csrf
                      <button type="submit" class="btn" {{ $break && $break->start_break && !$break->end_break ? 'disabled' : '' }}>休憩開始</button>
                  </form>
              </div>
              <div class="card">
                  <form method="POST" action="/break/end">
                      @csrf
                      <button type="submit" class="btn" {{ $break && $break->start_break && !$break->end_break ? '' : 'disabled' }}>休憩終了</button>
                  </form>
             </div>
         </div>
         
          <p>Atte, Inc.</p>
       </div>
  </body>
</html>
