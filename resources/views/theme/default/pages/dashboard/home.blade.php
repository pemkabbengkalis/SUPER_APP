@extends('theme.default.layouts.dashboard')

@section('dashboard-content')
    <div class="col-xl-3 box-col-30">
        <div class="md-sidebar job-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">file
                filter</a>
            <div class="md-sidebar-aside custom-scrollbar">
                <div class="file-sidebar">
                    @include('theme.default.pages.dashboard.profile')
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-md-12 box-col-70">
        <div class="file-content">
            @yield('dashboard-layanan')
        </div>
    </div>
@endsection
