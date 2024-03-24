<?php

namespace App\Http\Controllers\Site;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\TourGuide;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    public function dashboard()
    {
        return view('site.profile');
    }
    
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'gender' => 'required|in:male,female,other',
            'guide_type' => 'required|in:free,chargeable',
            'charges' => 'nullable|numeric',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'short_description' => 'required',
            'profile' => 'required|mimes:png,jpg,jpeg,webp,svg,gif'
        ]);
        $user = TourGuide::findOrFail(auth('tourguard')->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->gender = $request->gender;
        $user->guide_type = $request->guide_type;
        $user->charges = $request->charges;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->shot_description = $request->shot_description;
        if ($request->profile) {
            $user->profile = FileUploader::uploadFile($request->profile, 'images/tour-guides');
        }
        $user->save();
        return response([
            'success' => 'Profile detail updated successfully@'
        ]);
    }
}
