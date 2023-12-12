<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'added_date',
        'added_time',
        'controller_login',
        'phone_id',
        'registration_number',
        'vehicle_brand',
        'amount',
        'street',
        'offense_type',
    ];

    // Dodaj inne metody, jeśli są potrzebne
}
