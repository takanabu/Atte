＃アプリケーション名
Atte(アット)
ある企業の勤怠管理アプリ


＃＃作成した目的
人事評価の為


＃＃アプリケーションURL
URL 　・開発環境：http://localhost/
　　　・phpMyAdmin:http://localhost:8080/


※会員登録ページでユーザー登録を行いログインページでログインして使用します。


＃＃他のリポジトリ


＃＃機能一覧
会員登録機能
ログイン機能
勤務開始、勤務終了、休憩開始、休憩終了の打刻機能
日付別勤怠ページ表示機能


＃＃使用技術(実行環境)
php 8.0 ・HTML ・CSS　・laravel 10.0 ・MySQL 8.0　・docker-compose


＃＃テーブル設計



＃＃ER図



＃環境構築
Dockerビルド 　1．docker-compose up -d -build
※ MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて docker-compose.yml ファイルを編集してください。
Laravel環境構築 　1．docker-compose exec php bash 　2．composer install 3. .env.exampleファイルから.envを作成し、環境変数を変更 4.php artisan key:generate 5.php artisan migrate 6. php artisan db


＃＃他に記載する事









