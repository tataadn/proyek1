<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function dashboard()
    {
        return view('siswa.dashboard');
    }

    public function profile()
    {
        return view('siswa.profile');
    }

    public function absensi()
    {
        return view('siswa.absen');
    }

    public function history()
    {
        return view('siswa.history');
    }
}
