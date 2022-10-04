<?php

namespace App\Http\Controllers\Admin\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Registers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        $items = Registers::all();

        return view('pages.admin.applicant.index', compact('items'));
    }

    public function detail($id)
    {
        $item = Registers::where('id', $id)->first();

        // dd($item);
        return view('pages.admin.applicant.detail-applicant', compact('item'));
    }
}