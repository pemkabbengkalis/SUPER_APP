<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class profileController extends Controller
{
    public function api_url(){
        return config('app.api_url');
    }
    public function index()
    {
        if (!session()->has('user')) {
            return redirect()->route('login')->with('error', 'Session expired, please login again.');
        }

        $response = Http::get($this->api_url().'/api/get_profil');

        if ($response->successful()) {
            // $userProfile = $response->json(); // Ini akan jadi array
            $userProfile = $response->object();
        } else {
            $userProfile = null;
        }

        dd($userProfile);

        return view('theme.default.pages.dashboard.profile.index', compact('userProfile'));
    }


}
