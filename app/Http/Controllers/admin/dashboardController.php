<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\StartSession;

class dashboardController extends Controller
{
    public function index()
    {
        // Check if the 'user' session exists
        if (!session()->has('user')) {
            return redirect()->route('login')->with('error', 'Session expired, please login again.');
        }

        // Retrieve user data from session
        $user = session('user');

        // If needed, you can pass user data to the view (if necessary)
        return view('theme.default.pages.dashboard.index', compact('user'));
    }
}
