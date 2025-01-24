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
    public function api_url(){
        return config('app.api_url');
    }
    public function layananpublik()
    {
        $response = Http::get($this->api_url().'/api/layanan');

        if ($response->successful()) {
            $data = $response->json();
            return view('theme.default.pages.dashboard.layanan.layanan-publik', ['data' => $data['data']['list_layanan']]);
        }

        return abort(500, 'Unable to fetch data from API.');
    }

    public function detail_layanan($slug)
    {
            $response = Http::get($this->api_url().'/api/layanan/'.$slug);

            if ($response->successful()) {

                $data = $response->json();
                if(isset($data['data']['list_layanan'])){
                    return view('theme.default.pages.dashboard.layanan.layanan-publik', ['data' => $data['data']['list_layanan']]);
                }

                if ($slug == 'bapokting') {
                    // ambil API kecamatan
                    $districts = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/districts/1408.json')->json();
                    // Jika ada parameter kecamatan
                    if (isset($_GET['kecamatan'])) {
                        // Ambil data dari API berdasarkan kecamatan
                        $api = Http::get($this->api_url().'/api/'.$slug.'?kecamatan='.$_GET['kecamatan']);
                        if ($api->successful()) {
                            $detail = $api->json();
                        }else{
                            $detail = [];
                        }
                    }
                    // Jika tidak ada parameter kecamatan
                    else{
                        $detail = Http::get($this->api_url().'/api/'.$slug)->json();
                    }
                    return view('theme.default.pages.dashboard.layanan.bapokting', ['detail' => json_decode(json_encode($detail)), 'districts' => json_decode(json_encode($districts))]);
                }

                return view('theme.default.pages.dashboard.layanan.detail', ['data' => json_decode(json_encode($data['data']))]);
            }

            return abort(500, 'Unable to fetch data from API.');
    }

}
