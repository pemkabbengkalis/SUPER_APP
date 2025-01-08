@extends('theme.default.layouts.app')

@section('content')
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader4"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('theme.default.partials.header')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper horizontal-menu">
            <!-- Page Sidebar Start-->
            @include('theme.default.partials.horizontal-bar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row none">
                            <div class="col-6">
                                <h3>Layanan </h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">
                                            <svg class="stroke-icon">
                                                <use href="{{ asset('theme') }}/assets/svg/icon-sprite.svg#stroke-home">
                                                </use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Menu </li>
                                    <li class="breadcrumb-item active">Layanan </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        @yield('dashboard-content')
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            @include('theme.default.partials.footer')
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('theme') }}/assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('theme') }}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="{{ asset('theme') }}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('theme') }}/assets/js/scrollbar/simplebar.js"></script>
    <script src="{{ asset('theme') }}/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('theme') }}/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('theme') }}/assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('theme') }}/assets/js/sidebar-pin.js"></script>
    <script src="{{ asset('theme') }}/assets/js/slick/slick.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/slick/slick.js"></script>
    <script src="{{ asset('theme') }}/assets/js/header-slick.js"></script>
    <script src="{{ asset('theme') }}/assets/js/prism/prism.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/clipboard/clipboard.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/custom-card/custom-card.js"></script>
    <!-- calendar js-->
    <script src="{{ asset('theme') }}/assets/js/typeahead/handlebars.js"></script>
    <script src="{{ asset('theme') }}/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="{{ asset('theme') }}/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="{{ asset('theme') }}/assets/js/typeahead-search/handlebars.js"></script>
    <script src="{{ asset('theme') }}/assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('theme') }}/assets/js/script.js"></script>
@endsection
