<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $history = Siswa::all()->where('name',Auth::user()->name);
        return view('siswa.history',compact('history'));
    }

    public function store(Request $request)
    {
        Siswa::create($request->except(['_token']));
        Alert::success('Berhasil!', 'Anda telah melakukan absensi!');
        return redirect('siswa/absensi');
        // return $request->file('image')->store('post-images');
    }

    public function editprofile($id)
    {
        $user = User::find($id);
        return view('siswa.editprofile',compact(['user']));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->except(['_token']));
        Alert::success('Berhasil!', 'Data anda berhasil diupdate!');
        return view('siswa.profile');
    }
}
