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
            <h5>Daftar Layanan</h5></br>
            <ul class="quick-file d-flex flex-row">
                @foreach (json_decode(json_encode($data)) as $row)
                <li>
                    <div class="quick-box text-center">
                        <img src="{{$row->icon}}" alt="Nama Layanan" style="width: 100px; height: 100px;">
                    </div>
                    <a href="{{isset($row->path) ? route('detail',$row->path) : $row->link}}"><h6> {{$row->nama}}</h6> </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
