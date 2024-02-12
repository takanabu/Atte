<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakTime extends Model
{
    use HasFactory;


    protected $table = 'breaks';
    protected $fillable = ['user_id', 'start_break', 'end_break', 'created_at', 'updated_at'];
}
