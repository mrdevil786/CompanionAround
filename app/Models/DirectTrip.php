<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectTrip extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function tourist()
    {
        return $this->belongsTo(Tourist::class);
    }
}
