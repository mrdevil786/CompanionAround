<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
