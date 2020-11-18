<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller{

	function showlog(){
		return view('log');
	}

	 function showRegister(){
        return view("register");
    }

	 function logProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect("index")->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
        }
    }

    function registerProcess(){
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

            return redirect("log")->with('success', 'Data Berhasil Dtambahkan');
    }
}