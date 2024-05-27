<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    private function validateInput(Request $request, array $rules)
    {
        $validator = Validator::make($request->all(), $rules, $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'name.unique' => 'Nama yang di masukkan sudah ada pada kelompok 1.',
        ]);

        return $validator;
    }

    private function handleValidationFailure($urlRedirect, $validateData)
    {
        return redirect($urlRedirect)
            ->withErrors($validateData)
            ->withInput();
    }

    private function setSessionFlash($detectMessage, $message)
    {
        Session::flash($detectMessage, $message);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function proses_login(Request $request)
    {

        $validateData = $this->validateInput($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $remember = $request->has('remember') ? true : false;

        if ($validateData->fails()) {
            return $this->handleValidationFailure('/login', $validateData);
        } else if (Auth::attempt([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $remember)) {
            $request->session()->regenerate();
            $request->session()->put('user', $request->input('name'));
            $this->setSessionFlash('welcome', 'Selamat Datang ' . $request->input('name') . '.');
            return redirect()->intended('/app');
        } else {
            $this->setSessionFlash('error', 'Proses login gagal. Pastikan dengan memasukkan identitas dengan benar.');
            return $this->handleValidationFailure('/login', $validateData);
        }
    }

    public function pendaftaran()
    {
        return view('auth.pendaftaran');
    }

    public function proses_pendaftaran(Request $request)
    {
        $validateData = $this->validateInput($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validateData->fails()) {
            return $this->handleValidationFailure('/pendaftaran', $validateData);
        } else {

            $data = [
                'name' => Str::lower($request->input('name')),
                'email' => Str::lower($request->input('email')),
                'password' => Hash::make($request->input('password'))
            ];

            switch ($data['name']) {
                case "ahmad nurfaqih":
                case "rizka":
                case "isnaen":

                    // $id_role = ($data['nama_lengkap'] === "galih anggoro prasetya") ? 1 : 2;
                    $pendaftaran = new AuthModel();
                    $pendaftaran->name = $data['name'];
                    $pendaftaran->email = $data['email'];
                    $pendaftaran->password = $data['password'];
                    // $pendaftaran->id_role = $id_role;

                    if ($pendaftaran->save()) {
                        $this->setSessionFlash('success', 'Selamat proses mendaftar berhasil di lakukan.');
                        return redirect('/login')->withInput();
                    } else {
                        $this->setSessionFlash('error', 'Mohon maaf terjadi kesalahan saat proses pendaftaran. Silakan coba lagi.');
                        return redirect('/pendaftaran');
                    }
                    break;

                default:
                    $this->setSessionFlash('error', 'Nama kamu tidak terdaftar pada kelompok 3. Proses pendaftaran gagal di lakukan.');
                    return redirect('/pendaftaran');
                    break;
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Session::flash('logout', 'Kamu telah berhasil logout.');

        return redirect('/login');
    }
}