<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('pages.frontend.elearning.profile.account');
    }

    public function setting()
    {
        return view('pages.frontend.elearning.profile.setting');
    }
}