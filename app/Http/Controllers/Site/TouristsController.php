<?php

namespace App\Http\Controllers\Site;

use Exception;
use App\Models\Tourist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class TouristsController extends Controller
{
    public function index()
    {
        return view('site.welcome');
    }

    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle()
    {
        try {
            $tourist = Socialite::driver('google')->user();
            $findTourist = Tourist::where('email', $tourist->email)->first();

            if ($findTourist) {
                $findTourist->user_id = $tourist->id;
                $findTourist->full_name = $tourist->name;
                $findTourist->avatar = $tourist->avatar;
                $findTourist->touch();
                $findTourist->save();
            } else {
                $findTourist = new Tourist();
                $findTourist->user_id = $tourist->id;
                $findTourist->full_name = $tourist->name;
                $findTourist->email = $tourist->email;
                $findTourist->avatar = $tourist->avatar;
                $findTourist->social = "google";
                $findTourist->status = "active";
                $findTourist->save();
            }

            Auth::guard('tourist')->login($findTourist);

            return redirect('/about');
        } catch (Exception $e) {
            Log::error('Google authentication error: ' . $e->getMessage());
        }
    }
}
