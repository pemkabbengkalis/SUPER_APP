@extends('theme.default.layouts.auth')

@section('auth-content')
    <div class="row">
        <div class="col-12 p-0">
            <div class="login-card login-dark">
                <div>
                    <div><a class="logo text-start" href="index.html"><img class="img-fluid for-dark"
                                src="{{ asset('theme') }}/assets/images/logo/logo.png" alt="looginpage"><img
                                class="img-fluid for-light" src="{{ asset('theme') }}/assets/images/logo/logo_dark.png"
                                alt="looginpage"></a></div>
                    <div class="login-main">
                        <form class="theme-form" action="{{ route('auth.login.validasi') }}" method="POST">
                            @csrf
                            <h4>Hallo,</h4>
                            <p>Silahkan Masukkan Username dan Password Anda</p>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input class="form-control" type="email" required="" name="email"
                                    placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********">
                                    <div class="show-hide">
                                        <span class="show"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Ingat saya</label>
                                </div><a class="link" href="#">Lupa Password?</a>
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                </div>
                            </div>
                            <p class="mt-4 mb-0 text-center">Belum punya akun?<a class="ms-2"
                                    href="{{ route('auth.register') }}">Daftar</a></p>
                        </form>
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
    <script src="{{ asset('theme') }}/assets/js/sweet-alert/sweetalert.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('theme') }}/assets/js/script.js"></script>
    <script>
        $(document).on('click', '#error', function(e) {
            if ($('.email').val() == '' || $('.pwd').val() == '') {
                swal(
                    "Error!", "Sorry, looks like some data are not filled, please try again !", "error"
                )
            }
        });
    </script>
@endpush
