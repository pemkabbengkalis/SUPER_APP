<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function cctv()
    {
        $response = Http::get('https://cctv.bengkaliskab.go.id/api.php');

        if ($response->successful()) {
            $data = $response->json(); // Konversi ke array
        } else {
            $data = []; // Jika gagal, set data sebagai array kosong
        }

        return view('theme.default.pages.dashboard.layanan.cctv', compact('data'));
    }

}
