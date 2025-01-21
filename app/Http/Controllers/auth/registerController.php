<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class registerController extends Controller
{
    public function index()
    {
        return view('theme.default.pages.auth.register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|digits:16|unique:users,nik',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $response = Http::post('https://apiklik.pbedev.my.id/api/register', [
            'nik' => $request->nik,
            'name' => $request->name,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ]);

        if ($response->successful()) {
            return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
        }

        if ($response->failed()) {
            $errors = $response->json('errors', []);

            if (!empty($errors)) {
                return redirect()->back()->withErrors($errors)->withInput();
            }

            $errorMessage = $response->json('message', 'Registrasi gagal. Silakan coba lagi.');
            return redirect()
                ->back()
                ->withErrors(['api_error' => $errorMessage])
                ->withInput();
        }
        return redirect()
            ->back()
            ->withErrors(['api_error' => 'Terjadi kesalahan tak terduga. Silakan coba lagi.'])
            ->withInput();
    }
}
