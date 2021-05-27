<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainDetails extends Model
{
    protected $fillable = [
        'first_name ',
        'last_name ',
        'age',
        'email ',
        'address',
        'contact_number',
        'body_height',
        'body_weight',
        'join_date ',
        'user_type',
        'photo'

      ];
    
}
