<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
     /**
  * Run the database seeds.
  *
  * @return void
  */
    
    public function run()
    {
      $param = [
           'id' => '11',
           'user_id' => '1',
           'start_work' => '2024-02-15 10:00:00',
           'end_work' => '2024-02-15 20:00:00',
           'created_at' => '2024-02-15 10:00:00',
           'updated_at' => '2024-02-15 20:00:00',
     ];
           DB::table('attendances')->insert($param);
        $param = [
           'id' => '12',
           'user_id' => '2',
           'start_work' => '2024-02-15 10:00:00',
           'end_work' => '2024-02-15 20:00:00',
           'created_at' => '2024-02-15 10:00:00',
           'updated_at' => '2024-02-15 20:00:00',
     ];
           DB::table('attendances')->insert($param);
        $param = [
           'id' => '13',
           'user_id' => '3',
           'start_work' => '2024-02-15 10:00:00',
           'end_work' => '2024-02-15 20:00:00',
           'created_at' => '2024-02-15 10:00:00',
           'updated_at' => '2024-02-15 20:00:00',
     ];
          DB::table('attendances')->insert($param);
        $param = [
           'id' => '14',
           'user_id' => '4',
           'start_work' => '2024-02-15 10:00:00',
           'end_work' => '2024-02-15 20:00:00',
           'created_at' => '2024-02-15 10:00:00',
           'updated_at' => '2024-02-15 20:00:00',
     ];
          DB::table('attendances')->insert($param);
        $param = [
           'id' => '15',
           'user_id' => '5',
           'start_work' => '2024-02-15 10:00:10',
           'end_work' => '2024-02-15 20:00:00',
           'created_at' => '2024-02-15 10:00:10',
           'updated_at' => '2024-02-15 20:00:10',
     ];
          DB::table('attendances')->insert($param);
        $param = [
           'id' => '16',
           'user_id' => '6',
           'start_work' => '2024-02-15 10:00:20',
           'end_work' => '2024-02-15 20:00:00',
           'created_at' => '2024-02-15 10:00:10',
           'updated_at' => '2024-02-15 20:00:10',
     ];
          DB::table('attendances')->insert($param);
        $param = [
           'id' => '17',
           'user_id' => '7',
           'start_work' => '2024-02-15 10:00:20',
           'end_work' => '2024-02-15 20:00:00',
           'created_at' => '2024-02-15 10:00:10',
           'updated_at' => '2024-02-15 20:00:10',
     ];
          DB::table('attendances')->insert($param);
    }
    }

