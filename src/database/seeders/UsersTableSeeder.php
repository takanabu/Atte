<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
           'id' => '1',
           'name' => 'テスト太郎',
           'email' => 'test1@test.com',
           'password' => 'password',
           'created_at' => '2024-02-12 15:20:58',
           'updated_at' => '2024-02-12 15:20:58',
     ];
           DB::table('users')->insert($param);
        $param = [
           'id' => '2',
           'name' => 'テスト次郎',
           'email' => 'test2@test.com',
           'password' => 'password',
           'created_at' => '2024-02-12 15:20:58',
           'updated_at' => '2024-02-12 15:20:58',
     ];
           DB::table('users')->insert($param);
        $param = [
           'id' => '3',
           'name' => 'テスト三郎',
           'email' => 'test3@test.com',
           'password' => 'password',
           'created_at' => '2024-02-12 15:20:58',
           'updated_at' => '2024-02-12 15:20:58',
     ];
          DB::table('users')->insert($param);
        $param = [
           'id' => '4',
           'name' => 'テスト四郎',
           'email' => 'test4@test.com',
           'password' => 'password',
           'created_at' => '2024-02-12 15:20:58',
           'updated_at' => '2024-02-12 15:20:58',
     ];
          DB::table('users')->insert($param);
        $param = [
           'id' => '5',
           'name' => 'テスト五郎',
           'email' => 'test5@test.com',
           'password' => 'password',
           'created_at' => '2024-02-12 15:20:58',
           'updated_at' => '2024-02-12 15:20:58',
     ];
          DB::table('users')->insert($param);
        $param = [
           'id' => '6',
           'name' => 'テスト六郎',
           'email' => 'test6@test.com',
           'password' => 'password',
           'created_at' => '2024-02-12 15:20:58',
           'updated_at' => '2024-02-12 15:20:58',
     ];
          DB::table('users')->insert($param);
        $param = [
           'id' => '7',
           'name' => 'テスト七郎',
           'email' => 'test7@test.com',
           'password' => 'password',
           'created_at' => '2024-02-12 15:20:58',
           'updated_at' => '2024-02-12 15:20:58',
     ];
          DB::table('users')->insert($param);
    }
    }
