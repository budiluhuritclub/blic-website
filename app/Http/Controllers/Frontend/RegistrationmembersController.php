<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Registers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegistrationmembersController extends Controller
{
    public function form()
    {
        return view('pages.frontend.recruitment.form');
    }

    public function apply(Request $request)
    {
        $fakultas = ['FTI', 'FIKOM', 'FISIP', 'FT', 'FEB', 'AST'];

        $validator = Validator::make($request->all(), [
            'name'              =>      'required|min:10',
            'email'             =>      'required|email',
            'nim'               =>      'required|digits:10',
            'phone_number'      =>      'required|numeric|digits_between:10,14',
            'faculty'           =>      Rule::in($fakultas),
            'major'             =>      'required|min:5',
            'interest'          =>      'required',
            'field_interest'    =>      'required',
            'reason'            =>      'required|min:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $validated['join_year'] = date("Y");

        Registers::create($validated);

        return redirect()->route('apply-success');
    }

    public function success()
    {
        return view('pages.frontend.recruitment.success');
    }
}