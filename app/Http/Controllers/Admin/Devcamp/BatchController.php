<?php

namespace App\Http\Controllers\Admin\Devcamp;

use App\Http\Controllers\Controller;
use App\Models\DevcampBatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BatchController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batch = DevcampBatch::orderBy('batch', 'desc')->first();
        $lastBatch = 1;

        if ($batch == null) {
            $lastBatch = $batch['batch'];
            $lastBatch++;
        } else {
            $lastBatch = $batch['batch'];
            $lastBatch++;
        }

        return view('pages.admin.devcamp.create', compact('lastBatch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batch = DevcampBatch::orderBy('batch', 'desc')->first();
        $lastBatch = 1;

        if ($batch == null) {
            $lastBatch = $batch['batch'];
            $lastBatch++;
        } else {
            $lastBatch = $batch['batch'];
            $lastBatch++;
        }

        $validator = Validator::make($request->all(), [
            'title'      =>      'required|min:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        DevcampBatch::create([
            'batch'     => $lastBatch,
            'title'     => $validated['title'],
        ]);

        return redirect()->route('devcamp.index');
    }
}