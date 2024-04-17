<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristGuide extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function tourist()
    {
        return $this->belongsTo(Tourist::class);
    }
    public function tourguide()
    {
        return $this->belongsTo(TourGuide::class);
    }
}
