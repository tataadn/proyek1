<?php

namespace App\Http\Controllers\Guru\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            Alert::success('Berhasil!', 'Akun anda telah di validasi! Silakan melakukan login!');
            return redirect()->intended(RouteServiceProvider::GURU_HOME.'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        Alert::success('Berhasil!', 'Akun anda telah di validasi! Silakan melakukan login!');
        return redirect()->intended(RouteServiceProvider::GURU_HOME.'?verified=1');
    }
}
