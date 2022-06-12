<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function getKelas()
    {
        $kelas['mipa1'] = User::where('mipa1', '10 MIPA 1')->get();
    }
}
