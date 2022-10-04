<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('pages.frontend.elearning.profile.profile');
    }

    public function edit(Request $request)
    {
        return view('pages.frontend.elearning.profile.edit');
    }

    public function security()
    {
        return view('pages.frontend.elearning.profile.security');
    }

    public function changepassword(Request $request)
    {
        $nim = Auth::user()->nim;
        $password = $request->password;
        $newpassword = Hash::make($password);
        $item = User::where('nim', $nim)->firstOrFail();


        $this->validate($request, [
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required'
        ]);

        $check = Hash::check($password, $item->password);

        if ($check) {
            return back()->with('error', 'old password doesn`t match');
        }

        $item->password = $newpassword;

        // dd($item, $newpassword);

        $item->save();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return back()->with('success', 'Password Changed');
    }
}