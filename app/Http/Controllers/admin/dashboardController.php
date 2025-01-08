<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('theme.default.pages.dashboard.layanan.index');
    }

    public function layanan()
    {
    }
}
