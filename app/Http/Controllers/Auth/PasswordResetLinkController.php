<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Mail\PasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\PasswordBroker as PasswordBrokerContract;

class PasswordResetLinkController extends Controller
{
    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        
        $user = Password::getUser($request->only('email'));

        if (is_null($user)) {
            return back()->withInput($request->only('email'))->withErrors(['email' => __('passwords.user')]);
        }

        try{
            $details =
                [
                    'nama' => $user->firstname
                ];

            Mail::to($request->email)->send(new PasswordMail($details));
            $status=true;
            $request->session()->put('email', $request->input('email'));
        }
        catch(\Exception $e){
            $status=false;
        }

        return back();
    }
}
