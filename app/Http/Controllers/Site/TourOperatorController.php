<?php

namespace App\Http\Controllers\Site;

use App\Models\TourOperator;
use Illuminate\Http\Request;
use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\TourGuide;

class TourOperatorController extends Controller
{
    public function dashboard()
    {
        $user = auth('touroperator')->user();
        return view('site.tourOperatorProfile', compact('user'));
    }

    public function edit(Request $request)
    {
        $user = TourOperator::findOrFail($request->id);
        return $user;
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'address' => 'required|string',
            'zipcode' => 'required|numeric',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'description' => 'required',
            'logo' => 'required|mimes:png,jpg,jpeg,webp,svg,gif'
        ]);

        $user = TourOperator::findOrFail(auth('touroperator')->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->zipcode = $request->zipcode;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->description = $request->description;

        if ($request->hasFile('logo')) {
            $user->logo = FileUploader::uploadFile($request->file('logo'), 'storage/images/tour-guides', $user->logo);
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
        $tourist = TourOperator::findOrFail($request->id);
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
