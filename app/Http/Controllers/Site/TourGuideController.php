<?php

namespace App\Http\Controllers\Site;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\TourGuide;
use App\Models\TourGuideActivity;
use App\Models\TourGuideLanguage;
use App\Models\TouristGuide;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    public function dashboard()
    {
        $countries = Country::all();
        $languages = Language::select('id', 'name')->get();
        $user = TourGuide::findOrFail(auth('tourguard')->user()->id);
        $connectionHistory = TouristGuide::with(['tourist', 'tourguide'])->where('status', '!=', 'pending')->where('tour_guide_id', auth('tourguard')->user()->id)->get();
        $connectionRequest = TouristGuide::with(['tourist', 'tourguide'])->where('status', '=', 'pending')->where('tour_guide_id', auth('tourguard')->user()->id)->get();
        return view('site.profile', compact('user', 'connectionHistory', 'connectionRequest', 'languages', 'countries'));
    }

    public function getStates(Request $request)
    {
        $request->validate(['country_id' => 'required|exists:countries,id']);
        $states = State::where('country_id', $request->country_id)->select('id', 'name')->get();
        return response()->json($states);
    }


    public function getCities(Request $request)
    {
        $request->validate(['state_id' => 'required|exists:states,id']);
        $cities = City::where('state_id', $request->state_id)->select('id', 'name')->get();
        return response()->json($cities);
    }

    public function edit(Request $request)
    {
        $user = TourGuide::with(['tourguidelanguage', 'activity'])->findOrFail($request->id);
        return $user;
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
            'country' => 'required|exists:countries,id',
            'state' => 'required|exists:states,id',
            'city' => 'required|exists:cities,id',
            'short_description' => 'required',
            'profile' => 'mimes:png,jpg,jpeg,webp,svg,gif',
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
        $user->short_description = $request->short_description;

        if ($request->hasFile('profile')) {
            $user->profile = FileUploader::uploadFile($request->file('profile'), 'images/tour-guides', $user->profile);
        }

        if ($request->language) {
            foreach ($request->language as $language) {
                TourGuideLanguage::firstOrCreate([
                    'tour_guide_id' => $user->id,
                    'language_id' => $language,
                ]);
            }
        }

        if ($request->activity) {
            foreach ($request->activity as $activity) {
                TourGuideActivity::updateOrInsert([
                    'tour_guide_id' => $user->id,
                    'activity' => $activity,
                ]);
            }
        }

        $user->status = 'active';
        $user->save();

        return redirect()->back()->with('success', 'Profile detail updated successfully!');
    }


    public function requestAction(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'action' => 'required|in:accept,reject'
        ]);

        $tourist = TouristGuide::findOrFail($request->id);
        if ($request->action == 'accept') {
            $tourist->update([
                'status' => 'accepted',
                'connected_at' => now(),
            ]);
            return response([
                'success' => 'accepted',
                'message' => 'Request accepted successfully!'
            ]);
        } elseif ($request->action == 'reject') {
            $tourist->update([
                'status' => 'rejected',
            ]);
            return response([
                'success' => 'rejected',
                'message' => 'Request rejected successfully!'
            ]);
        }
    }
}
