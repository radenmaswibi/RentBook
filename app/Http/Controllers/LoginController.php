<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function storeLogin(Request $request){
        $storeLogin = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
    if(Auth::attempt($storeLogin)){
        $request->session()->regenerate();{
            return redirect()->intended('/index');
        }
        return redirect()->intended('/index');
    }

    return back()->with('LoginEror','Email atau password salah');
    }
    
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
}
}
