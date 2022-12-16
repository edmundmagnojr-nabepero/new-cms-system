<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){
        return view('admin.users.profile', ['user'=>$user]);
    }

    public function update(User $user){
        $inputs = request()->validate([
            'username' => 'required'|'string'|'max:255'|'alpha_dash',
            'name' => 'required'|'string'|'max:255',
            'email' => 'required'|'string'|'max:255',
            'avatar' => 'file'
        ]);
        if(request('avatar')){
            $inputs['avatar'] = request('avatar')->store('images');
            // $user->avatar = $inputs['avatar'];
        }
        // $user->username = $inputs['username'];
        // $user->name = $inputs['name'];
        // $user->email = $inputs['email'];
        // $this->authorize('update', $user);
        // $user->save();
        auth()->user()->save($inputs);
        return back();
    }
}