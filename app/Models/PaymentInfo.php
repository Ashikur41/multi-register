<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_holder_name',
        'card_number',
        'expiration_date',
        'cvv'
      ];
}