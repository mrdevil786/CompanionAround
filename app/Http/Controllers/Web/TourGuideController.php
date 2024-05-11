<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\TourGuide;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    public function index()
    {
        $tourGuides = TourGuide::latest()->get();
        return view('admin.tourguide.index', compact('tourGuides'));
    }
    public function status(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|exists:tour_guides,id',
            'status' => 'required|in:active,blocked',
        ]);
        // return $request->all();

        TourGuide::findOrFail($request->id)->update(['status' => $request->status]);

        return response()->json(['message' => 'Tour guide status updated successfully']);
    }

    public function profile($id)
    {
        $guide = TourGuide::with(['touristguide'])->findOrFail($id);
        return  view('admin.tourguide.profile',compact('guide'));
    }

    // public function destroy($id)
    // {
    //     $user = TourGuide::findOrFail($id);
    //     $user->delete();

    //     return redirect()->route('admin.tourguides.index')->with('success', 'Tour deleted successfully!');
    // }
}
