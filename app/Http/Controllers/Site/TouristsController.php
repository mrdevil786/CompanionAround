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
            $findUser = Tourist::where('email', $tourist->email)->first();

            if ($findUser) {
                $findUser->full_name = $tourist->name;
                $findUser->avatar = $tourist->avatar;
                $findUser->touch();
                $findUser->save();
            } else {
                $findUser = new Tourist();
                $findUser->full_name = $tourist->name;
                $findUser->email = $tourist->email;
                $findUser->avatar = $tourist->avatar;
                $findUser->social = "google";
                $findUser->status = "active";
                $findUser->save();
            }

            Auth::login($findUser);

            return redirect('/');
        } catch (Exception $e) {
            Log::error('Google authentication error: ' . $e->getMessage());
        }
    }
}
