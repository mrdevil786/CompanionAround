<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TourGuide extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];
    public function touristguide()
    {
        return $this->hasMany(TouristGuide::class);
    }
    public function tourguidelanguage()
    {
        return $this->hasMany(TourGuideLanguage::class, 'tour_guide_id');
    }
    public function activity()
    {
        return $this->hasMany(TourGuideActivity::class, 'tour_guide_id');
    }
}
