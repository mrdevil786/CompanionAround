<?php

namespace App\Http\Controllers\Site;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tourist;
use Laravel\Socialite\Facades\Socialite;

class TouristController extends Controller
{
    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle(){
        try {
            
            $tourist = Socialite::driver('google')->user();
            $findUser = Tourist::where('email',$tourist->email)->first();

            if(!$findUser){

                $findUser = new Tourist();

                $findUser->full_name = $tourist->name;
                $findUser->email = $tourist->email;
                $findUser->avatar = $tourist->avatar;
                $findUser->status = "active";

                $findUser->save();

            }

            session()->put('id',$findUser->id);
            return redirect('/');

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
