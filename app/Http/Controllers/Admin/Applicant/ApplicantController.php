<?php

namespace App\Http\Controllers\Admin\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Registers;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        $items = Registers::all();

        return view('pages.admin.applicant.index', compact('items'));
    }
}