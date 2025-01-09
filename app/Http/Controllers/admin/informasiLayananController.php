<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class informasiLayananController extends Controller
{

    public function index()
    {
        return view('theme.default.pages.dashboard.layanan.index');
    }


    public function detail()
    {
        return view('theme.default.pages.dashboard.layanan.detail');
    }
}
