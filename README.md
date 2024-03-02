# アプリケーション名
Atte(アット)

## アプリ概要
ある企業の勤怠管理アプリ

アプリのトップページ画像
<img width="1217" alt="トップページ" src="https://github.com/takanabu/Atte/assets/146699650/a2465e09-0aef-4dbb-8032-47c0a110e6d5">


## 作成した目的
人事評価の為

## アプリケーションURL
- 開発環境：http://localhost/
- phpMyAdmin:http://localhost:8080/

※会員登録ページでユーザー登録を行いログインページでログインして使用します。

## 機能一覧
- 会員登録機能
- ログイン機能
- 勤務開始、勤務終了、休憩開始、休憩終了の打刻機能
- 日付別勤怠ページ表示機能

## 使用技術(実行環境)
- php 8.0
- HTML
- CSS
- laravel 10.0
- MySQL 8.0
- docker-compose

## テーブル設計
<img width="570" alt="userテーブル" src="https://github.com/takanabu/Atte/assets/146699650/06288416-26cb-470c-807a-d667de9e6073">

<img width="584" alt="attendanceテーブル" src="https://github.com/takanabu/Atte/assets/146699650/6c816a84-3897-4171-9d6d-6e5c481ec085">

<img width="571" alt="breakテーブル" src="https://github.com/takanabu/Atte/assets/146699650/674ab712-fe7d-4917-b346-01b489ae817b">





## ER図
![er2-4](https://github.com/takanabu/Atte/assets/146699650/a96217e9-dd2b-4ab5-8014-4d9011918579)


## 環境構築
Dockerビルド
1. docker-compose up -d -build  
※ MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて docker-compose.yml ファイルを編集してください。

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db

