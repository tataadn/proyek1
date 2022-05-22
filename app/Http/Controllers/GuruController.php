<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index(){
        return view('guru.index');
    }

    public function profile(){
        return view('guru.profile');
    }

    public function datasiswa(){
        $data = Siswa::all();
        return view('guru.datasiswa', ['siswa'=> $data]);
    }

    public function absensi(){
        return view('guru.absensi');
    }

    public function rekap(){
        return view('guru.rekap');
    }

    public function login(){
        return view('guru.login');
    }

    public function register(){
        return view('guru.register');
    }

    public function store(Request $request){
        // $validatedData = 
        $request->validate([
            'nama_guru' => 'required|max:255',
            // 'mapel' => 'required',
            // 'jenkel' => 'required',
            // 'alamat' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'required|min:6'
        ]);

        dd('alhamdulillah');

        // Guru::create($validatedData);
    }
}
