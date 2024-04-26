<?php

namespace App\Http\Controllers\Site;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required',
            'cover_image' => 'required',
            'days' => 'required|numeric',
            'nights' => 'required|numeric',
        ]);
        return $request->all();
        $tourOperator = auth('touroperator')->user();
        $package = Package::create([
            'tour_operator_id' => $tourOperator->id,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'cover_image' => FileUploader::uploadFile($request->cover_image, 'images/package'),
            'days' => $request->days,
            'nights' => $request->nights
        ]);

        return redirect()->back()->with('success', 'Package added successfully!');
    }
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return $package;
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|exists:packages,id',
            'title' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required',
            'cover_image' => 'nullable',
            'days' => 'required|numeric',
            'nights' => 'required|numeric',
        ]);
        $tourOperator = auth('touroperator')->user();
        $package = Package::findOrFail($request->id);
        $package->title = $request->title;
        $package->price = $request->price;
        $package->description = $request->description;
        if ($request->cover_image) {
            $package->cover_image = FileUploader::uploadFile($request->cover_image, 'images/package');
        }
        $package->days = $request->days;
        $package->nights = $request->nights;
        $package->save();
        return redirect()->back()->with('success', 'Package updated successfully!');
    }
}
