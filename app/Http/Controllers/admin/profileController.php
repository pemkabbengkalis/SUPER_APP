<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        return view('theme.default.pages.dashboard.profile.index');
    }
}
