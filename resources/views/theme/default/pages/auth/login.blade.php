@extends('theme.default.layouts.auth')

@section('auth-content')
    <div class="row">
        <div class="col-12 p-0">
            <div class="login-card login-dark">
                <div>
                    <div><a class="logo" href="index.html"><img class="img-fluid for-dark"
                                src="{{ asset('theme') }}/assets/images/logo/logo-bengkalis.png" alt="looginpage"
                                style="width: 80px !important"><img class="img-fluid for-light"
                                src="{{ asset('theme') }}/assets/images/logo/logo-bengkalis.png" alt="looginpage"
                                style="width: 80px !important"></a>
                    </div>
                    <div class="login-main">
                        <form class="theme-form" action="#" method="POST">
                            @csrf
                            <center><h4>Aplikasi Klik Bermasa</h4></center>
                            <center><p>Silahkan Masukkan NIK dan Password Anda</p></center>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Tampilkan error jika ada -->
                            @error('login_error')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-form-label">Nomor Identitas Kependudukan (NIK)</label>
                                <input class="form-control" type="number" required="" name="nik"
                                    placeholder="Masukkan NIK" value="{{ old('nik') }}">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Kata Sandi</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********" value="{{ old('password') }}">
                                    <div class="show-hide">
                                        <span class="show"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Masuk</button>
                                </div>
                            </div>
                            <p class="mt-4 mb-0 text-center">Belum punya akun?<a class="ms-2"
                                    href="{{ route('register') }}">Daftar</a></p>
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
