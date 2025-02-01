<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fast_name',
        'last_name',
        'father_name',
        'mother_name'
      ];
}