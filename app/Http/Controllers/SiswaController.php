<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return view('siswa.index');
    }

    public function profile(){
        return view('siswa.profile');
    }

    public function absen(){
        return view('siswa.absen');
    }

    public function history(){
        return view('siswa.history');
    }

    public function login(){
        return view('siswa.login');
    }

    public function register(){
        return view('siswa.register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'address' => 'required|max:255',
            'nis' => 'required|unique:siswa|integer',
            'password' => 'required|min:6'
        ]);

        // $siswa = new Siswa;
        // $siswa->name = $request->name;
        // $siswa->kelas = $request->kelas;
        // $siswa->jenis_kelamin = $request->jenis_kelamin;
        // $siswa->address = $request->address;
        // $siswa->nis = $request->nis;
        // $siswa->password = $request->password;

        return redirect('/login-siswa');
    }
}
