<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    public function update(UpdateProfileRequest $request) {
        auth()->user()->update($request->only('firstname', 'lastname', 'username', 'email', 'phone', 'avatar'));

        return redirect(url('profile'))->with('message', 'Profile saved successfully');
    }

    public function updatePassword(UpdateProfileRequest $request) {
        auth()->user()->update(['password' => bcrypt($request->input('password'))]);

        return redirect(url('profile'))->with('message', 'Profile saved successfully');
    }   
}
