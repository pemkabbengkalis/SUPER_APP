@extends('theme.default.layouts.auth')

@section('auth-content')
    <div class="row">
        <div class="col-12 p-0">
            <div>
                <div class="theme-form">
                    <div class="wizard-4" id="wizard">
                        <ul>
                            <li> <a class="logo text-start ps-0" href="index.html"><img class="img-fluid for-dark"
                                        src="{{ asset('theme') }}/assets/images/logo/logo.png" alt="looginpage"><img
                                        class="img-fluid for-light"
                                        src="{{ asset('theme') }}/assets/images/logo/logo_dark.png" alt="looginpage"></a>
                            </li>
                            <li><a href="#step-1">
                                    <h4>1 </h4>
                                    <h5>Kependudukan</h5><small>Detail Kependudukan</small>
                                </a></li>
                            <li><a href="#step-2">
                                    <h4>2</h4>
                                    <h5>Biodata</h5><small>Informasi Data Diri</small>
                                </a></li>
                            <li><a href="#step-3">
                                    <h4>3</h4>
                                    <h5>Kata Sandi</h5><small>Tentukan Kata Sandi</small>
                                </a></li>
                            <li>
                                <img src="{{ asset('theme') }}/assets/images/login/icon.png" alt="looginpage">
                            </li>
                        </ul>
                        <div id="step-1">
                            <div class="wizard-title">
                                <h2>Kependudukan</h2>
                                <h5 class="text-muted mb-4">Silahkan masukkan data kependudukan Anda</h5>
                            </div>
                            <div class="login-main">
                                <div class="theme-form">
                                    <div class="form-group mb-3">
                                        <label for="no_kk">Nomor Kartu Keluarga</label>
                                        <input class="form-control" id="no_kk" type="number" name="no_kk"
                                            placeholder="Masukkan Nomor Kartu Keluarga" required="required">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nik">Nomor Induk Kependudukan</label>
                                        <input class="form-control" id="nik" type="number" name="nik"
                                            placeholder="Masukkan Nomor Induk Kependudukan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step-2">
                            <div class="wizard-title">
                                <h2>Biodata</h2>
                                <h5 class="text-muted mb-4">Silahkan masukkan informasi data diri Anda</h5>
                            </div>
                            <div class="login-main">
                                <div class="theme-form">
                                    <div class="form-group mb-3 m-t-15">
                                        <label for="name">Nama Lengkap</label>
                                        <input class="form-control" id="name" type="text" name="name"
                                            placeholder="Masukkan Nama Lengkap">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email">Email</label>
                                        <input class="form-control" id="email" type="email" name="email"
                                            placeholder="Masukkan Email">
                                    </div>
                                    <div class="form-group mb-3 m-t-15">
                                        <label for="no_hp">Nomor Telepon</label>
                                        <input class="form-control" id="no_hp" type="number" name="no_hp"
                                            placeholder="Masukkan Nomor Telepon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step-3">
                            <div class="wizard-title">
                                <h2>Kata Sandi</h2>
                                <h5 class="text-muted mb-4">Silahkan masukkan Kata Sandi Anda</h5>
                            </div>
                            <div class="login-main">
                                <div class="theme-form">
                                    <div class="form-group mb-3">
                                        <label for="password">Kata Sandi</label>
                                        <input class="form-control" id="password" type="password" name="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="validate_password">Konfirmasi Kata Sandi</label>
                                        <input class="form-control" id="validate_password" type="password"
                                            name="validate_password" placeholder="Enter again">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- latest jquery-->
    <script src="{{ asset('theme') }}/assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('theme') }}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="{{ asset('theme') }}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{ asset('theme') }}/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- calendar js-->
    <script src="{{ asset('theme') }}/assets/js/form-wizard/form-wizard-five.js"></script>
    <script src="{{ asset('theme') }}/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('theme') }}/assets/js/script.js"></script>
    <script src="{{ asset('theme') }}/assets/js/theme-customizer/customizer.js"></script>
@endpush
