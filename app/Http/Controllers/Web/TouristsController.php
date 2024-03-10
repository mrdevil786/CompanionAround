<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tourist;
use Illuminate\Http\Request;

class TouristsController extends Controller
{
    public function index()
    {
        $tourists = Tourist::all();
        return view('admin.tourist.index', compact('tourists'));
    }
}
