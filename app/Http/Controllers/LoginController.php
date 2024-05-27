<?php

namespace App\Http\Controllers;

use App\Models\Data_supplier;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function index()
    {
        return view('Data_suppliers.login');
    }

    // proses login
    public function proses_login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
             Session::flash('error', 'Username dan Password harus di isi.');

            return redirect('login')->withInput();
        } else if (Auth::attempt(['username' => $username, 'password' => $password])) {
            // Authentication was successful...
            $request->session()->regenerate();

            return redirect('Data_suppliers');
        } else {
            Session::flash('error', 'Kamu harus memasukkan identitas dengan benar.');
            return redirect('login');
        }
    }
    
    
    // fungsi logout
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::flash('success', 'Kamu berhasil keluar');
        return redirect('login');
    }
}
