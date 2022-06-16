<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    public function dashboard(){
        return view('guru.dashboard');
    }

    public function profile(){
        return view('guru.profile');
    }

    public function datasiswa(Request $request){
       if($request->has('search')){
        $data = Siswa::where('nama_siswa', 'LIKE', '%'.$request->search.'%');
       }

        $datasiswa = User::all();
        return view('guru.datasiswa',compact(['datasiswa']));
    }

    public function absensi()
    {
        $history = Siswa::all();
        return view('guru.absensi',compact(['history']));
    }

    public function editprofile($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('guru.editprofile',compact(['user']));
        // $siswa = Siswa::where('noid',$noid)->first();
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->except(['_token']));
        // $user->nama_siswa = $request->nama_siswa;
        Alert::success('Berhasil!', 'Data anda berhasil diupdate!');
        return view('guru.profile');
    }
}
