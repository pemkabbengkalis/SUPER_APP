<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function index()
    {
        return view('theme.default.pages.auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'nik' => 'required|digits:16',
            'password' => 'required|string|min:6',
        ]);

        // Kirim request ke API login
        $response = Http::post('https://apiklik.pbedev.my.id/api/login', [
            'nik' => $request->nik,
            'password' => $request->password,
        ]);

        if ($response->successful() && $response->json('status') === true) {
            // Ambil data user dan token dari respons API
            $data = $response->json('data');
            $user = $data['user'];
            $token = $data['token'];

            // Simpan data user dan token ke dalam sesi
            session(['user' => $user, 'token' => $token]);

            // Log session data untuk memastikan data sudah disimpan
            Log::info('User session data after login:', session()->all());

            // Redirect ke dashboard
            return to_route('dashboard')->with('success', 'Login berhasil!');
        } else {
            // Ambil pesan error dari API jika status false
            $errorMessage = $response->json('message', 'Login gagal. Periksa NIK dan password Anda.');

            // Kembali dengan error
            return redirect()
                ->back()
                ->withErrors(['login_error' => $errorMessage])
                ->withInput();
        }
    }

    public function logout()
    {
        // Hapus semua session
        Session::flush();

        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
}
