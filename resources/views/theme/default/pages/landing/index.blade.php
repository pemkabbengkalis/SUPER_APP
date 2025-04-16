@extends('theme.default.layouts.app')
@section('subtitle', 'Beranda')
@section('content')
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="landing-page"><span class="cursor"><span class="cursor-move-inner"><span
                    class="cursor-inner"></span></span><span class="cursor-move-outer"><span class="cursor-outer">
                </span></span></span>
        <!-- Page Body Start-->
        <div class="landing-home" id="home">
            <div class="container-fluid">
                <div class="sticky-header">
                    <header>
                        <nav class="navbar navbar-b navbar-dark navbar-trans navbar-expand-xl fixed-top nav-padding"
                            id="sidebar-menu"><a class="navbar-brand p-0" href="#"><img class="img-fluid"
                                    src="{{ asset('theme') }}/assets/images/bengkalis.png" alt="" style="width: 70px; height: 90px;"></a>
                            <button class="navbar-toggler navabr_btn-set custom_nav" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault"
                                aria-expanded="false"
                                aria-label="Toggle navigation"><span></span><span></span><span></span></button>
                            <div class="navbar-collapse justify-content-center collapse hidenav" id="navbarDefault">
                                <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                                </ul>
                            </div>
                            <div class="buy-btn"><a class="nav-link js-scroll" href="{{ route('login') }}">Masuk</a>
                            </div>
                        </nav>
                    </header>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="content text-center">
                            <div class="landing-text mt-4">
                                <h1 class="mb-0 text-white">{{config('app.name')}}</h1>
                                <p class="mt-3 mb-0 text-muted menyala">Layanan publik, informasi terkini, dan kemudahan warga — semua dalam satu aplikasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--frameworks start-->
        <section class="framework section-py-space light-bg">
            <div class="container-lg container-fluid">
                <div class="row">
                    <div class="col-sm-12 wow pulse">
                        <div class="title text-center">
                            <h5>Dengan berbagai platform yang dapat digunakan</h5>
                            <h2 class="mb-lg-2 mb-0">Akses Layanan Publik</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 framworks">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                <ul class="framworks-list">
                                    <a href="https://mpp.bengkaliskab.go.id/">
                                        <li class="box wow fadeInUp">
                                            <div><img src="{{ asset('theme') }}/assets/images/bengkalis.png"
                                                    alt="">
                                            </div>
                                            <h5 class="mb-0 f-w-600">MPP Bengkalis</h5>
                                        </li>
                                    </a>
                                    <a href="https://cctv.bengkaliskab.go.id/">
                                        <li class="box wow fadeInUp">
                                            <div><img src="{{ asset('theme') }}/assets/images/bengkalis.png"
                                                    alt="">
                                            </div>
                                            <h5 class="mb-0 f-w-600">CCTV Bengkalis</h5>
                                        </li>
                                    </a>
                                    <a href="https://bengkaliskab.go.id/">
                                        <li class="box wow fadeInUp">
                                            <div><img src="{{ asset('theme') }}/assets/images/bengkalis.png"
                                                    alt="">
                                            </div>
                                            <h5 class="mb-0 f-w-600">Portal Bengkalis</h5>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="footer-landing">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-content">
                            <div class="footer-text mt-4">
                                <p>© 2025 <span class="font-primary">{{ env('APP_NAME') }}</span> All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection

@push('js')
    <!-- latest jquery-->
    <script src="{{ asset('theme') }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/cursor/stats.min.js"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('theme') }}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="{{ asset('theme') }}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('theme') }}/assets/js/tooltip-init.js"></script>
    <script src="{{ asset('theme') }}/assets/js/animation/wow/wow.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/landing_sticky.js"></script>
    <script src="{{ asset('theme') }}/assets/js/landing.js"></script>
    <script src="{{ asset('theme') }}/assets/js/slick/slick.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/slick/slick.js"></script>
    <script src="{{ asset('theme') }}/assets/js/landing-slick.js"></script>
    <script src="{{ asset('theme') }}/assets/js/header-slick.js"></script>
    <!-- Plugins JS Ends-->
@endpush
