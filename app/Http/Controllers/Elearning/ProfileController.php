<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\DivMember;
use App\Models\Registers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profile()
    {
        $totaldivision = DivMember::where('nim', Auth::user()->nim)->count('nim');
        $items = DivMember::with('divisions')->where('nim', Auth::user()->nim)->get();

        return view('pages.frontend.elearning.profile.profile', compact('totaldivision', 'items'));
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
        $password = $request->password;
        $newpassword = Hash::make($password);
        $item = User::where('nim', Auth::user()->nim)->firstOrFail();

        $check = Hash::check($request->oldpassword, Auth::user()->password);

        if (!$check) {
            return back()->with('error', 'old password doesn`t match');
        }

        $this->validate($request, [
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required'
        ]);


        $item->password = $newpassword;

        $item->save();

        Auth::logout();

        return back()->with('success', 'Password Changed');
    }

    public function choosedivision()
    {
        $items = Division::all();
        $count = DivMember::where('nim', Auth::user()->nim)->count('nim');

        if ($count == 2) {
            return redirect()->route('profile');
        }
        return view('pages.frontend.elearning.profile.choose-division', compact('items'));
    }

    public function storedivision(Request $request)
    {
        $count = DivMember::where('nim', Auth::user()->nim)->count('nim');
        $maxkodediv = Division::all()->sortByDesc('kode')->first();

        if ($count == 2) {
            return redirect()->route('profile');
        }

        $validator = Validator::make($request->only('divisi'), [
            'divisi'      =>      'required|min:1|max:{$maxkodediv->kode}',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        DivMember::create([
            'nim'             => Auth::user()->nim,
            'kode_divisi'     => $validated['divisi']
        ]);

        return redirect()->route('profile');
    }
}