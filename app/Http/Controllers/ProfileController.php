<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Forum;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller {
    public function update(UpdateProfileRequest $request) {
        $request->authorize();

        auth()->user()->update($request->only('firstname', 'lastname', 'username', 'email', 'phone'));

        if($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = $request['username'];  
            $avatarPath = $image->storeAs('public/avatars/', $imageName.'.jpeg');
            $avatarPathDB= substr($avatarPath, 6);
            auth()->user()->update(['avatar'=>$avatarPathDB]);
        }

        Alert::success('Profil Berhasil Diperbaharui!', 'Selamat, profil Anda telah berhasil diperbaharui.');

        return redirect(url('/lihat-profil'));
    }

    public function updatePassword(UpdatePasswordRequest $request) {
        $request->authorize();

        if(Hash::check($request->input('password'), Auth::user()->password)){
            return back()->withErrors(['email' => __('passwords.user')]);
        }

        auth()->user()->update(['password' => Hash::make($request->input('password_new'))]);

        Alert::success('Kata Sandi Berhasil Diperbaharui!', 'Selamat, kata sandi Anda telah berhasil diperbaharui.');

        return redirect(url('/lihat-profil'));;
    }

    public function getDataProfile(){
        $user = Auth::user();
        return view('profile.suntingprofil')->with('user', $user);
    }

    public function getDataPassword(){
        $user = Auth::user();
        return view('profile.ubahpassword')->with('user', $user);
    }

    public function getDashboard(){
        $user = Auth::user();

        return view('profile.dashboard')->with('user', $user);
    }

    public function getProfilePage(){
        $user = Auth::user();
        $posts = Forum::with('users')->where('id', $user->id)->get();

        return view('profile.lihatprofil')->with('posts', $posts)->with('user', $user);
    }

}
