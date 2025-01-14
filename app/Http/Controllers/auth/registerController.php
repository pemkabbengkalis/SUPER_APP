<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        return view('theme.default.pages.auth.register');
    }
}
