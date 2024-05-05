<?php

namespace App\Http\Controllers\Site;

use Exception;
use App\Models\Tourist;
use App\Models\TouristGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\TourGuide;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class TouristsController extends Controller
{
    public function dashboard()
    {
        $user = Tourist::where('id', auth('tourist')->user()->id)->first();
        $connectionHistory = TouristGuide::with(['tourist', 'tourguide'])->where('tourist_id', auth('tourist')->user()->id)->get();
        $totalPendingRequest = TouristGuide::where('status', 'pending')->count();
        $totalConnected = TouristGuide::where('status', 'accepted')->count();
        return view('site.touristProfile', compact('user', 'connectionHistory', 'totalPendingRequest', 'totalConnected'));
    }

    public function index()
    {
        $tourGuides = TourGuide::where('status', 'active')->latest()->take(9)->get();
        return view('site.welcome', compact('tourGuides'));
    }    

    public function requestConnection(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|exists:tour_guides,id',
        ]);
        // $request->all();
        $tourist = Tourist::findOrFail(auth('tourist')->user()->id);
        $guide = TourGuide::findOrFail($request->id);
        $connection = TouristGuide::create([
            'tourist_id' => $tourist->id,
            'tour_guide_id' => $guide->id,
            'guide_data' => json_encode($guide),
            'tourist_data' => json_encode($tourist),
            'connected_at' => now(),
        ]);
        return response([
            'success' => true,
            'message' => 'Connection request sent successfully!'
        ]);
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

            return redirect('tourist/');
        } catch (Exception $e) {
            Log::error('Google authentication error: ' . $e->getMessage());
        }
    }
    public function logout()
    {
        if (auth('tourist')->check()) {
            auth('tourist')->logout();
        }
        return redirect('/');
    }
}
