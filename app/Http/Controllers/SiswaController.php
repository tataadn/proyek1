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
}
