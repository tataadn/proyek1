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

    public function datasiswa(){
        $datasiswa = User::all();
        // dd($datasiswa);
        return view('guru.datasiswa',compact(['datasiswa']));
    }

    public function absensi()
    {
        $history = Siswa::all();
        return view('guru.absensi',compact(['history']));
    }
}
