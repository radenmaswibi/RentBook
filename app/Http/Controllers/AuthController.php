<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function indexRegister(){
        return view('auth.register');
    }

    public function storeRegister(Request $request){
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'no_hp' => ['required'],
            'addres' => ['required'],
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        User::create($credentials);
        return redirect('/login')->with('success', 'Register berhasil, silahkan login');
    }
}
