<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use RealRashid\SweetAlert\Facades\Alert;

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
        $history = Siswa::all();
        return view('siswa.history',compact('history'));
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token']));
        Siswa::create($request->except(['_token']));
        Alert::success('Berhasil!', 'Anda telah melakukan absensi!');
        return redirect('siswa/absensi');
    }
}
