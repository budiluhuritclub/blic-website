<?php

namespace App\Http\Controllers\Admin\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Registers;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function accountgenerate()
    {
        $applicants = Registers::where('join_year', date("Y"))->orderBy('nim')->get();

        foreach ($applicants as $applicant) {
            $account = User::where('nim', $applicant->nim)->first('nim');

            if (empty($account->nim)) {
                User::create([
                    'nim' => $applicant->nim,
                    'name' => $applicant->name,
                    'email' => $applicant->email,
                    'password' => Hash::make('codename12345'),
                    'level' => 'user',
                    'type' => 'student',
                    'phone_number' => $applicant->phone_number,
                    'faculty' => $applicant->faculty,
                    'major' => $applicant->major,
                    'angkatan' => $applicant->join_year
                ]);
            } else {
                continue;
            }
        }
        return redirect()->route('account.index');
    }
}