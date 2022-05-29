<?php

namespace App\Http\Controllers\Guru\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('guru.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'role' => ['required', 'string', 'max:25'],
            'noid' => ['required', 'string', 'max:50'],
            'name' => ['required', 'string', 'max:255'],
            'jenkel' => ['required', 'string', 'max:5'],
            'alamat' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'role' => $request->role,
            'noid' => $request->noid,
            'name' => $request->name,
            'jenkel' => $request->jenkel,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        Alert::success('Berhasil!', 'Akun anda berhasil diregistrasi!');
        return redirect('guru/register');
    }
}
