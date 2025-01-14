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
            <h5 class="mb-2">Detail Pelayanan</h5>
                <a href="http://simpel-dukcapil.bengkaliskab.go.id/" target="_blank" class="btn btn-primary">Kunjungi SIMPEL Dukcapil</a>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal">Layanan 112</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pdfModalLabel">Modul Panggilan 112</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Iframe untuk menampilkan konten -->
                        <iframe src="https://online.fliphtml5.com/herht/iqhv/" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
