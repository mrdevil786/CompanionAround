<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TouristEnquiry extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function touroperator()
    {
        return $this->belongsTo(TourOperator::class);
    }
    public function tourist()
    {
        return $this->belongsTo(Tourist::class);
    }
}
