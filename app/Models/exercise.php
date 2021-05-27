<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
     protected $fillable = [
        'exercise_name',
        'exercise_details',
        'exercise_type',
        'exercise_steps',
        'EPhoto'
      ];
}
