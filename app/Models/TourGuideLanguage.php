<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuideLanguage extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function tourguide()
    {
        return $this->belongsTo(TourGuide::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
