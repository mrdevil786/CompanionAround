<?php

namespace App\Http\Controllers\Site;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\TourGuide;
use App\Models\TourGuideActivity;
use App\Models\TourGuideLanguage;
use App\Models\TouristGuide;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    public function dashboard()
    {
        $languages = Language::select('id', 'name')->get();
        $user = TourGuide::findOrFail(auth('tourguard')->user()->id);
        $connectionHistory = TouristGuide::with(['tourist', 'tourguide'])->where('status', '!=', 'pending')->where('tour_guide_id', auth('tourguard')->user()->id)->get();
        $connectionRequest = TouristGuide::with(['tourist', 'tourguide'])->where('status', '=', 'pending')->where('tour_guide_id', auth('tourguard')->user()->id)->get();
        return view('site.profile', compact('user', 'connectionHistory', 'connectionRequest', 'languages'));
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
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'short_description' => 'required',
            'profile' => 'mimes:png,jpg,jpeg,webp,svg,gif'
        ]);
        // return $request->all();
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
            foreach ($request->language as $key => $language) {
                TourGuideLanguage::firstOrCreate([
                    'tour_guide_id' => $user->id,
                    'language_id' => $language,
                ], [
                    'tour_guide_id' => $user->id,
                    'language_id' => $language,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
        if ($request->activity) {
            foreach ($request->activity as $key => $activity) {
                TourGuideActivity::updateOrInsert([
                    'tour_guide_id' => $user->id,
                    'activity' => $activity,
                ], [
                    'tour_guide_id' => $user->id,
                    'activity' => $activity,
                    'created_at' => now(),
                    'updated_at' => now(),
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
        // return $request->all();
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
