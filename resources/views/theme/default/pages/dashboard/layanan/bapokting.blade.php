@extends('theme.default.pages.dashboard.home')
@section('dashboard-layanan')
    <div class="card">
        <div class="card-header mb-0">
            {{-- <div class="d-md-flex">
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
            </div> --}}
            <div class="row d-flex justify-content-between">
                <div class="col-md-8">
                    @php
                        $kecamatan = $detail->data->nama_kecamatan ?? request()->query('kecamatan');
                    @endphp
                    <h5 class="mb-2">BAPOKTING Kecamatan {{$kecamatan}}</h5>
                    <p>Berikut ini daftar harga Bahan Pokok Penting Kecamatan {{$kecamatan}}</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label" for="exampleFormControlSelect7">Pilih Kecamatan</label>
                        <form action="" id="districtForm">
                            <select class="form-select btn-pill digits" id="districtSelect" name="kecamatan">
                                @foreach ($districts as $item)
                                <option value="{{$item->name}}" @if ($item->name == strtoupper($kecamatan)) selected @endif>{{ucwords($item->name)}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">

            <div class="table-responsive custom-scrollbar">
                <table class="display" id="basic-1">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Nama Harga</th>
                            <th>Terakhir Update</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if ($detail->status != 'success')
                        {{-- Jika Data Kecamatan Tidak Ditemukan --}}
                        <tr>
                            <td colspan="3" class="text-center">Data tidak ditemukan</td>
                        </tr>
                        @else
                        {{-- Jika Data Kecamatan Ditemukan --}}
                        @foreach ($detail->data->sektor as $item)
                            @foreach ($item->barang as $subitem)
                                <tr>
                                    <td>{{$item->nama_sektor ?? ''}} {{$subitem->nama_barang ??''}}</td>
                                    <td>Rp. {{ number_format($subitem->harga ?? 0, 0, ',', '.') }},-</td>
                                    <td>{{$subitem->tanggal}}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Pastikan untuk menyertakan jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#districtSelect').change(function() {
            $('#districtForm').submit();
        });
    });
</script>
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('theme') }}/assets/css/vendors/datatables.css">
@endpush
@push('js')
    <script src="{{ asset('theme') }}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/datatable/datatables/datatable.custom.js"></script>

@endpush
@endsection
