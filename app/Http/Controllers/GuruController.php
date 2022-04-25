<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        return view('guru.index');
    }

    public function profile(){
        return view('guru.profile');
    }

    public function datasiswa(){
        return view('guru.datasiswa');
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
        $request->validate([
            'nama_guru' => 'required|max:255',
            'mapel' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required|max:255',
            'nip' => 'required|unique:guru|integer|max:12',
            'password' => 'required|min:6'
        ]);
    }
}