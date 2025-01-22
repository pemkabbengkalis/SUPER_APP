<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function logout()
    {
        Session::flush();
        return to_route('login')->with('success', 'Anda telah berhasil logout.');
    }
}
