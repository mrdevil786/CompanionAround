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

    // UPDATE TOURISTS'S STATUS (ACTIVE OR BLOCKED)
    public function status(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|exists:users,id',
            'status' => 'required|in:active,blocked',
        ]);

        Tourist::findOrFail($request->id)->update(['status' => $request->status]);

        return response()->json(['message' => 'Tourist status updated successfully']);
    }

    // DELETE A USER
    public function destroy($id)
    {
        $tourist = Tourist::findOrFail($id);
        $tourist->delete();

        return redirect()->route('admin.tourists.index')->with('success', 'User deleted successfully!');
    }
    public function profile($id)
    {
        $tourist = Tourist::with(['touristguide'])->findOrFail($id);
        return view('admin.tourist.profile', compact('tourist'));
    }
}
