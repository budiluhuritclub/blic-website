<?php

namespace App\Http\Controllers\Admin\Division;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DivisionController extends Controller
{
    public function index()
    {
        $items = Division::all();

        return view('pages.admin.division.index', compact('items'));
    }

    public function create()
    {
        $kode = Division::orderBy('kode', 'desc')->first();
        $lastkode = 1;

        if ($kode == null) {
            $lastkode = 1;
        } else {
            $lastkode = $kode['kode'];
            $lastkode++;
        }

        return view('pages.admin.division.create', compact('lastkode'));
    }

    public function store(Request $request)
    {
        $kode = Division::orderBy('kode', 'desc')->first();
        $lastkode = 1;


        if ($kode == null) {
            $lastkode = 1;
        } else {
            $lastkode = $kode['kode'];
            $lastkode++;
        }

        $validator = Validator::make($request->all(), [
            'nama_division'      =>      'required|min:10',
            'deskripsi'          =>      'required'
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $validated = $validator->validated();

        Division::create([
            'kode'              => $lastkode,
            'nama_division'     => $validated['nama_division'],
            'deskripsi'         => $validated['deskripsi']
        ]);

        return redirect()->route('all-division');
    }
}
