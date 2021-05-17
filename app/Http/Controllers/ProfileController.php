<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    public function update(UpdateProfileRequest $request) {
        auth()->user()->update($request->only('firstname', 'lastname', 'username', 'email', 'phone', 'avatar'));

        return back()->with('message', 'Profile saved successfully');
    }

    public function updatePassword(UpdatePasswordRequest $request) {
        auth()->user()->update(['password' => bcrypt($request->input('passwordbaru'))]);

        return back()->with('message', 'Profile saved successfully');
    }

    public function getDataProfile(Request $request){
        $user = [
            'firstname' => $request->user()->firstname,
            'lastname' => $request->user()->lastname,
            'email' => $request->user()->email,
            'phone' => $request->user()->phone,
            'username' => $request->user()->username,
            'photo' => $request->user()->avatar
        ];

        return view('profile.suntingprofil')->with('user', $user);
    }

    public function getDataPassword(Request $request){
        $user = [
            'name' => $request->user()->firstname . ' ' . $request->user()->lastname,
            'photo' => $request->user()->avatar
        ];

        return view('profile.ubahpassword')->with('user', $user);
    }
}
