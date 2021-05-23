<?php

namespace App\Http\Controllers\Auth;

#error_reporting (E_ALL ^ E_NOTICE);

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
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
        return view('auth.register');
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
            'firstname' => 'required|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'avatar' => 'image|mimes:jpg,jpeg,png'
        ]);
        
        if($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = $request['username'];  
            $avatarPath = $image->storeAs('public/avatars/', $imageName.'.jpeg');
            $avatarPathDB= substr($avatarPath, 6);
        }
        else{
            $avatarPathDB = "/avatars//profilAvatar.png";
        }
        
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $avatarPathDB,
            'phone' => $request->phone,
        ]);

        event(new Registered($user));

        Alert::success('Pendaftaran Berhasil!', "Terima kasih telah mendaftar di CancerShare! Yuk, jelajahi kebutuhanmu!");

        return redirect(url('/login'));
    }
}
