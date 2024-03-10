<?php

namespace App\Http\Controllers\Site;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class TouristController extends Controller
{
    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle(){
        try {
            $user = Socialite::driver('google')->user();
            dd($user);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
