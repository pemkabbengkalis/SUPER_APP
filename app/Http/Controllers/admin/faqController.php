<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class faqController extends Controller
{
    public function index()
    {
        return view('theme.default.pages.dashboard.faq.index');
    }
}
