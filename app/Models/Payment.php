<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'tranx_ref',
        'email',
        'firstname',
        'lastname',
        'phone',
        'bank',
        'mode_payment',
        'currency',
        'amount',
        'status'
    ];
}
