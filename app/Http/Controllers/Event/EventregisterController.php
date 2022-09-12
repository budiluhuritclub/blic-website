<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.event.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'      =>      'required|min:5',
            'nim'       =>      'required|digits:10',
            'email'     =>      'required',
            'no_telp'   =>      'required',
            'fakultas'  =>      'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        Events::create([
            'event'     => "Devcamp 01 : UI/UX",
            'nim'       => $validated['nim'],
            'nama'      => $validated['nama'],
            'email'     => $validated['email'],
            'no_telp'   => $validated['no_telp'],
            'fakultas'  => $validated['fakultas'],
        ]);

        return redirect()->route('success-register-event');
    }
}