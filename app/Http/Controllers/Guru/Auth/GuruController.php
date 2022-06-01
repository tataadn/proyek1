<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function dashboard(){
        return view('guru.dashboard');
    }
}
