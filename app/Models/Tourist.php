<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Tourist as Authenticatable;

class Tourist extends Authenticatable
{
    use HasFactory, Notifiable ;

    protected $guarded = [];
}
