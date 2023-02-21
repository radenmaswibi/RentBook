<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = User::get();

        return view('dashboard.user', compact('data'));
    }

    public function editUser($id){
        $data = User::where('id' , $id)->first();
        return view('dashboard.edit-user' , compact('data'));
    }

    public function  updateUser(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email' =>'required',
            'no_hp' =>'required',
            'addres' => 'required',
        ]);

        $data = User::where('id', $id)->first();

        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'addres' => $request->addres,
        ]);

        return redirect(route('user'))->with('edit', 'berhasil edit data user');
    }
    public function dashboardIndex(){
        $user = User::all();
        return view('dashboard.index', compact('user'));

    }

    public function deleteUser(Request $request, $id){
        User::where('id' , $id)->delete();
        return redirect(route('user'));
    }
}
