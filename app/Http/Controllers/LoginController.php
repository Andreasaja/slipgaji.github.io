<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            //password hrs di isi value dari encrypt HASH
            // admin  HASH nya adalah $2y$10$phRQdqvgHcy9fcPTSyQVi.omTnRke0TGwL/FDPQcAmKyYXE0TxJz2
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            //jika berhasil login
            //return redirect('home');
            return redirect('daftarslipgaji');

        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
