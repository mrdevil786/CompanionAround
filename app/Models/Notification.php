<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'type',
        'message',
        'is_read',
        'read_at',
        'booking_date',
        'start_date',
        'end_date',
        'status',
        'no_of_people',
        'special_request',
        'budget',
        'country',
        'state',
        'city'
    ];

}
