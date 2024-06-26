<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\TourOperator;
use Illuminate\Http\Request;

class TourOperatorController extends Controller
{
    public function index()
    {
        $tourOperators = TourOperator::latest()->get();
        return view('admin.touroperator.index', compact('tourOperators'));
    }

    public function profile($id)
    {
        $tourOperators = TourOperator::with(['package'])->findOrFail($id);
        return  view('admin.touroperator.profile', compact('tourOperators'));
    }
}
