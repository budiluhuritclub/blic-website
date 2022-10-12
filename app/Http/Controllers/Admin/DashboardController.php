<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DivMember;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalpengurus = User::where('level', 'admin')->count('nim');
        $totalanggota = User::where('level', 'user')->count('nim');

        $webprogramming = DivMember::where('kode_divisi', '1')->count('kode_divisi');
        $mobileprogramming = DivMember::where('kode_divisi', '2')->count('kode_divisi');
        $uiux = DivMember::where('kode_divisi', '3')->count('kode_divisi');
        $datamining = DivMember::where('kode_divisi', '4')->count('kode_divisi');
        $cybersecurity = DivMember::where('kode_divisi', '5')->count('kode_divisi');
        $monsoonsim = DivMember::where('kode_divisi', '6')->count('kode_divisi');

        return view('pages.admin.dashboard', compact('totalpengurus', 'totalanggota', 'webprogramming', 'mobileprogramming', 'uiux', 'datamining', 'cybersecurity', 'monsoonsim'));
    }
}