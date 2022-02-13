<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;

class Profilecontroller extends Controller
{
    //
    public function update(ProfileUpdateRequest $request)
    {
        // dd($request->all());
        auth()->user()->update($request->only('name', 'email'));

        if ($request->input('password')) {
            auth()->user()->update([
                'password'=> bcrypt($request->input('password'))
            ]);
        }
        return redirect()->route('profile');
    }
}
