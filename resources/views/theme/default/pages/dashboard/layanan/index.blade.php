@extends('theme.default.pages.dashboard.home')
@section('dashboard-layanan')
    <div class="card">
        <div class="card-header">
            <div class="d-md-flex">
                <form class="form-inline" action="#" method="get">
                    <div class="form-group d-flex align-items-center mb-0"> <i class="fa fa-search"></i>
                        <input class="form-control-plaintext" type="text" placeholder="Search...">
                    </div>
                </form>
                <div class="flex-grow-1 text-end d-md-block d-none">
                    <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
                        <div class="btn btn-primary" onclick="getFile()"> <i data-feather="plus-square"></i>Add New
                        </div>
                        <div style="height: 0px;width: 0px; overflow:hidden;">
                            <input id="upfile" type="file" onchange="sub(this)">
                        </div>
                    </form>
                    <div class="btn btn-outline-primary ms-2"><i data-feather="upload"> </i>Upload </div>
                </div>
            </div>
        </div>
        <div class="card-body file-manager">
            <h5 class="mb-2">Daftar Layanan </h5>
            <ul class="quick-file d-flex flex-row">
                <li>
                    <div class="quick-box text-center">
                        <!-- Tampilkan gambar jika ada -->
                        <img src="https://via.placeholder.com/50" alt="Nama Layanan" style="width: 50px; height: 50px;">
                    </div>
                    <a href="{{route('dashboard.detail_layanan')}}"><h6> Nama Layanan</h6> </a>
                </li>
                <li>
                    <div class="quick-box text-center">
                        <!-- Tampilkan gambar jika ada -->
                        <img src="https://via.placeholder.com/50" alt="Nama Layanan" style="width: 50px; height: 50px;">
                    </div>
                    <h6>Nama Layanan</h6>
                </li>
            </ul>
        </div>
    </div>
@endsection
