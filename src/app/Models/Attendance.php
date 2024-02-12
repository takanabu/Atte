<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';
    protected $fillable = ['user_id', 'start_work', 'end_work', 'created_at', 'updated_at'];

    public function breakTimes()
      {
          return $this->hasMany(BreakTime::class);
      }
}