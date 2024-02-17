<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
           'id' => '111',
           'user_id' => '1',
           'attendance_id' => '11',
           'start_break' => '2024-02-15 12:00:00',
           'end_break' => '2024-02-15 12:30:00',
           'created_at' => '2024-02-15 12:00:00',
           'updated_at' => '2024-02-15 12:30:00',
     ];
           DB::table('breaks')->insert($param);
        $param = [
           'id' => '222',
           'user_id' => '2',
           'attendance_id' => '12',
           'start_break' => '2024-02-15 12:00:00',
           'end_break' => '2024-02-15 12:30:00',
           'created_at' => '2024-02-15 12:00:00',
           'updated_at' => '2024-02-15 12:30:00',
     ];
           DB::table('breaks')->insert($param);
        $param = [
           'id' => '333',
           'user_id' => '3',
           'attendance_id' => '13',
           'start_break' => '2024-02-15 12:00:00',
           'end_break' => '2024-02-15 12:30:00',
           'created_at' => '2024-02-15 12:00:00',
           'updated_at' => '2024-02-15 12:30:00',
     ];
           DB::table('breaks')->insert($param);   
        $param = [
           'id' => '444',
           'user_id' => '4',
           'attendance_id' => '14',
           'start_break' => '2024-02-15 12:00:00',
           'end_break' => '2024-02-15 12:30:00',
           'created_at' => '2024-02-15 12:00:00',
           'updated_at' => '2024-02-15 12:30:00',
     ];
           DB::table('breaks')->insert($param); 
        $param = [
           'id' => '555',
           'user_id' => '5',
           'attendance_id' => '15',
           'start_break' => '2024-02-15 12:00:00',
           'end_break' => '2024-02-15 12:30:00',
           'created_at' => '2024-02-15 12:00:00',
           'updated_at' => '2024-02-15 12:30:00',
     ];
           DB::table('breaks')->insert($param); 
        $param = [
           'id' => '666',
           'user_id' => '6',
           'attendance_id' => '16',
           'start_break' => '2024-02-15 12:00:00',
           'end_break' => '2024-02-15 12:30:00',
           'created_at' => '2024-02-15 12:00:00',
           'updated_at' => '2024-02-15 12:30:00',
     ];
           DB::table('breaks')->insert($param);  
        $param = [
           'id' => '777',
           'user_id' => '7',
           'attendance_id' => '17',
           'start_break' => '2024-02-15 12:00:00',
           'end_break' => '2024-02-15 12:30:00',
           'created_at' => '2024-02-15 12:00:00',
           'updated_at' => '2024-02-15 12:30:00',
     ];
           DB::table('breaks')->insert($param);            
    }

}
