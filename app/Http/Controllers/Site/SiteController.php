<?php

namespace App\Http\Controllers\Site;

use App\Models\TourGuide;
use App\Models\TourOperator;
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
        if ($request->type === 'tour_guide') {
            $check = TourGuide::where('email', $request->email)->first();
            if ($check) {
                return redirect()->back()->with(['error' => 'You have already registered']);
            }
            $user = TourGuide::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            Auth::guard('tourguard')->login($user);
            $route = route('tourguide.guide.index');
        }
        if ($request->type === 'tour_operator') {
            $user = TourOperator::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->password),
            ]);
            Auth::guard('touroperator')->login($user);
            $route = route('touroperator.operator.index');
        }

        return response([
            'success' => true,
            'route' => $route,
            'message' => 'Singup successfully!'
        ]);
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        if ($request->type === 'tour_guide') {
            if (Auth::guard('tourguard')->attempt($request->only(['email', 'password']))) {
                return response([
                    'success' => true,
                    'route' => route('tourguide.guide.index'),
                    'message' => 'Loggedin SUccessfully!'
                ]);
            }
        }
        if ($request->type === 'tour_operator') {
            if (Auth::guard('touroperator')->attempt($request->only(['email', 'password']))) {
                return response([
                    'success' => true,
                    'route' => route('touroperator.operator.index'),
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
        if (auth('touroperator')->check()) {
            auth('touroperator')->logout();
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

    public function tour_guides()
    {
        $tourGuides = TourGuide::where('status', 'active')->latest()->get();
        return view('site.tour-guides', compact('tourGuides'));
    }

    public function tour_operators()
    {
        return view('site.tour-operators');
    }

    public function contact()
    {
        return view('site.contact');
    }
}
