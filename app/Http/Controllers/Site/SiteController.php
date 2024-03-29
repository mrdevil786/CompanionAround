<?php

namespace App\Http\Controllers\Site;

use App\Models\TourGuide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function findCompanion()
    {
        return view('site.findcomp');
    }
    public function login()
    {
        return view('site.login');
    }

    public function signUp(Request $request)
    {
        $request->validate([
            'type' => 'required|in:tour_guide,tour_operator',
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'password' => 'required|string'
        ]);
        $check = TourGuide::where('email', $request->email)->first();
        if ($check) {
            return redirect()->back()->with(['error' => 'You have already registered']);
        }
        if ($request->type === 'tour_guide') {
            $user = TourGuide::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        Auth::guard('tourguard')->login($user);
        return response([
            'success' => true,
            'message' => 'Singup successfully!'
        ]);
    }
    
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:tour_guides,email',
            'password' => 'required|string'
        ]);
        if ($request->type === 'tour_guide') {
            if (Auth::guard('tourguard')->attempt($request->only(['email', 'password']))) {
                return response([
                    'success' => true,
                    'route' => route('tourguide.guide'),
                    'message' => 'Loggedin SUccessfully!'
                ]);
            }
        }
    }

    public function logout()
    {
        if (auth('tourguard')->check()) {
            auth('tourguard')->logout();
        }
        return redirect('/');
    }

    public function about()
    {
        return view('site.about');
    }
    public function service()
    {
        return view('site.service');
    }
    public function packages()
    {
        return view('site.packages');
    }
    public function contact()
    {
        return view('site.contact');
    }
}
