<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourOperatorController extends Controller
{
    public function dashboard()
    {
        $user = auth('touroperator')->user();
        return view('site.tourOperatorProfile', compact('user'));
    }
}
