<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Devcamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        $fakultas = ['FTI', 'FIKOM', 'FISIP', 'FT', 'FEB', 'AST'];

        $validator = Validator::make($request->all(), [
            'nama'      =>      'required|min:10',
            'nim'       =>      'required|digits:10',
            'email'     =>      'required|email',
            'no_telp'   =>      'required|numeric|digits_between:10,14',
            'fakultas'  =>      ['required', Rule::in($fakultas)],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        Devcamp::create([
            'no_batch'  => "1",
            'nim'       => $validated['nim'],
            'nama'      => $validated['nama'],
            'email'     => $validated['email'],
            'no_telp'   => $validated['no_telp'],
            'fakultas'  => $validated['fakultas'],
        ]);

        return redirect()->route('success-register-event');
    }
}