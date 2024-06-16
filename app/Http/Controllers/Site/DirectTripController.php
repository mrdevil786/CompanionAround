<?php

namespace App\Http\Controllers\SIte;

use App\Http\Controllers\Controller;
use App\Models\DirectTrip;
use App\Models\Package;
use App\Models\TouristEnquiry;
use Illuminate\Http\Request;

class DirectTripController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'where_to_go' => 'required',
            'from_date' => 'required|date',
            'to_date' => 'required|date',
            'no_of_people' => 'required',
            'message' => 'nullable|string',
            'budget' => 'nullable',
            'type' => 'required',
        ]);
        // return $request->all();
        $user = auth('tourist')->user();
        $trip = DirectTrip::create([
            'tourist_id' => $user->id,
            'where_you_go' => $request->where_to_go,
            'from_date' => date('Y-m-d', strtotime($request->from_date)),
            'to_date' => date('Y-m-d', strtotime($request->to_date)),
            'no_of_people' => $request->no_of_people,
            'message' => $request->message,
            'looking_for' => $request->looking_for,
            'budget' => $request->budget,
            'request_type' => $request->type,
        ]);
        return redirect()->back()->with('success', 'Thank you for your request our team get back to you soon!');
    }

    public function packageEnquiry(Request $request)
    {
        $request->validate([
            'packageId' => 'required|numeric|exists:packages,id',
        ]);
        // return $request->all();
        $tourist = auth('tourist')->user();
        $package = Package::findOrFail($request->packageId);
        TouristEnquiry::create([
            'package_id' => $package->id,
            'package_data' => json_encode($package),
            'tour_operator_id' => $package->tour_operator_id,
            'tourist_id' => $tourist->id,
        ]);

        return response([
            'success' => true,
            'message' => 'Thank you for qneuiry!'
        ]);
    }
}
