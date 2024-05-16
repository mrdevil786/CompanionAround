<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DirectTrip;
use Illuminate\Http\Request;

class DirectTripController extends Controller
{
    public function index()
    {
        $trips = DirectTrip::with(['tourist'])->latest()->get();
        return view('admin.direct-trip.index', compact('trips'));
    }
}
