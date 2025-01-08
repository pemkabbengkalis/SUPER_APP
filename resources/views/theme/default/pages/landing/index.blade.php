@extends('theme.default.layouts.app')

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
                                    src="{{ asset('theme') }}/assets/images/landing/landing_logo.png" alt=""></a>
                            <button class="navbar-toggler navabr_btn-set custom_nav" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault"
                                aria-expanded="false"
                                aria-label="Toggle navigation"><span></span><span></span><span></span></button>
                            <div class="navbar-collapse justify-content-center collapse hidenav" id="navbarDefault">
                                <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                                </ul>
                            </div>
                            <div class="buy-btn"><a class="nav-link js-scroll" href="#">Masuk</a>
                            </div>
                        </nav>
                    </header>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="best-selling"><img class="img-fluid"
                                src="{{ asset('theme') }}/assets/images/landing/selling-product.png" alt="selling-product">
                            <div class="img-shadow"></div>
                        </div>
                        <div class="nft-marketplace"> <img class="img-fluid"
                                src="{{ asset('theme') }}/assets/images/landing/nft-marketplace.png" alt="nft-marketplace">
                            <div class="nft-marketplace-shadow"></div>
                        </div>
                        <div class="content text-center">
                            <div>
                                <h1 class="text-center">Portal Layanan Publik<span
                                        class="d-flex align-items-center justify-content-center pt-2 sub-content"><span>Pemerintah</span>
                                        <button class="animate-button-slide"><span class="notification-slider"><span
                                                    class="d-flex h-100"><span class="mb-0 f-w-400"> <span
                                                            class="font-primary">Kabupaten</span></span><i
                                                        class="icon-arrow-top-right f-light"> </i></span><span
                                                    class="d-flex h-100"><span class="mb-0 f-w-400"><span
                                                            class="f-light">Bengkalis</span></span></span><span
                                                    class="d-flex h-100"> <span class="mb-0 f-w-400"><span
                                                            class="f-light">Riau</span></span></span></span></button><span>HTML
                                            Template</span></span></h1>
                                <div class="arrow-animate">
                                    <svg>
                                        <use href="{{ asset('theme') }}/assets/svg/icon-sprite.svg#animated-arrow"> </use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="user-content"> <span class="text-center">The incredible and user-friendly HTML was
                                created using flexible, contemporary, and strong unique parts.</span></div>
                        <div class="star-animate"> <img class="img-fluid"
                                src="{{ asset('theme') }}/assets/images/landing/Vector.png" alt="Vector"></div>
                        <div class="screen-1"> <img class="img-fluid"
                                src="{{ asset('theme') }}/assets/images/landing/demo/dashboard-1.png" alt="dashboard-img">
                        </div>
                        <div class="screen-2"> <img class="img-fluid sidebar-cuts-image"
                                src="{{ asset('theme') }}/assets/images/landing/sidebarcuts.png" alt="sidebarcuts">
                            <div class="screen-sidebar"></div>
                        </div>
                        <div class="total-revenue-img"><img class="img-fluid"
                                src="{{ asset('theme') }}/assets/images/landing/totalrevenue.png" alt="totalrevenue">
                            <div class="total-revenue-shadow"> </div>
                        </div>
                        <div class="star-img"> <img class="img-fluid start-animate fa-spin"
                                src="{{ asset('theme') }}/assets/images/landing/star.png" alt="star"></div>
                        <div class="new-user-img"><img class="img-fluid"
                                src="{{ asset('theme') }}/assets/images/landing/newuser.png" alt="new-user">
                            <div class="new-user-shadow"> </div>
                        </div>
                        <div class="star-img-left"> <img class="img-fluid start-animate-rotate fa-spin"
                                src="{{ asset('theme') }}/assets/images/landing/star.png" alt="star"></div>
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
                            <h5>Daftar</h5>
                            <h2 class="mb-lg-2 mb-0">Instansi</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 framworks">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                <ul class="framworks-list">
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/bootstrap.png"
                                                alt="">
                                        </div>
                                        <h5 class="mb-0 f-w-600">Bootstrap 5</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/css.png"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">CSS</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/sass.png"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Sass</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/pug.png"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Pug</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/npm.png"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">NPM</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/charts.png"
                                                alt="">
                                        </div>
                                        <h5 class="mb-0 f-w-600">Charts</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/gulp.png"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Gulp</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/web-pack.png"
                                                alt="">
                                        </div>
                                        <h5 class="mb-0 f-w-600">Web pack</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/kit.png"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Starter Kit</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/uikits.png"
                                                alt="">
                                        </div>
                                        <h5 class="mb-0 f-w-600">40+ UI Kits</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/builders.png"
                                                alt="">
                                        </div>
                                        <h5 class="mb-0 f-w-600">Builders</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/iconset.png"
                                                alt="">
                                        </div>
                                        <h5 class="mb-0 f-w-600">11 Icon Sets</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/forms.png"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Forms</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/table.png"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">Tables</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="{{ asset('theme') }}/assets/images/landing/icon/html/apps.png"
                                                alt=""></div>
                                        <h5 class="mb-0 f-w-600">17+ Apps</h5>
                                    </li>
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
                                <p>© 2024 <span class="font-primary">{{ env('APP_NAME') }}</span> All Rights Reserved.</p>
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
