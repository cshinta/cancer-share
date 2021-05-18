<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller {
    public function update(UpdateProfileRequest $request) {
        auth()->user()->update($request->only('firstname', 'lastname', 'username', 'email', 'phone', 'avatar'));

        return back()->with('message', 'Profile saved successfully');
    }

    public function updatePassword(UpdatePasswordRequest $request) {
        auth()->user()->update(['password' => Hash::make($request->input('password'))]);

        return back()->with('message', 'Profile saved successfully');
    }

    public function getDataProfile(Request $request){
        $user = Auth::user();
        return view('profile.suntingprofil')->with('user', $user);
    }

    public function getDataPassword(Request $request){
        $user = Auth::user();
        return view('profile.ubahpassword')->with('user', $user);
    }

    public function getDashboard(Request $request){
        $user = Auth::user();

        return view('profile.dashboard')->with('user', $user);
    }

}
