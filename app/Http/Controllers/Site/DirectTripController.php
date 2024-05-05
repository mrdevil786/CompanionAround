<?php

namespace App\Http\Controllers\SIte;

use App\Http\Controllers\Controller;
use App\Models\DirectTrip;
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
            // 'looking_for' => 'nullable',
        ]);
        // return $request->all();
        $user = auth('tourist')->user();
        $trip = DirectTrip::create([
            'tourist_id' => $user->id,
            'where_you_go' => $request->where_to_go,
            'from_date' => $request->from_date,
            'to_date' => date('Y-m-d', strtotime($request->to_date)),
            'no_of_people' => date('Y-m-d', strtotime($request->no_of_people)),
            'message' => $request->message,
            'looking_for' => $request->looking_for,
        ]);
        return redirect()->back()->with('success', 'Thank you for your request our team get back to you soon!');
    }
}
