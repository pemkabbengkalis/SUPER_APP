@extends('theme.default.layouts.auth')

@section('auth-content')
    <div class="row">
        <div class="col-12 p-0">
            <div class="login-card login-dark">
                <div>
                    <div><a class="logo" href="index.html"> <img class="img-fluid for-dark"
                                src="{{ asset('theme') }}/assets/images/logo/logo.png" alt="looginpage"><img
                                class="img-fluid for-light" src="{{ asset('theme') }}/assets/images/logo/logo_dark.png"
                                alt="looginpage"></a></div>
                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <h4>Pendaftaran</h4>
                            <p>Silahkan isi form dibawah untuk mendaftar ke aplikasi {{ env('APP_NAME') }}</p>

                            <!-- NIK Field -->
                            <div class="form-group">
                                <label class="col-form-label">Nomor Identitas Kependudukan (NIK)</label>
                                <input class="form-control @error('nik') is-invalid @enderror" type="number" name="nik"
                                    value="{{ old('nik') }}" placeholder="Masukkan NIK">
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Nama Lengkap Field -->
                            <div class="form-group">
                                <label class="col-form-label">Nama Lengkap</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ old('name') }}" placeholder="Jhon Doe">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="form-group">
                                <label class="col-form-label">Kata Sandi</label>
                                <div class="form-input position-relative">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        name="password" placeholder="*********">
                                    <div class="show-hide">
                                        <span class="show"></span>
                                    </div>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Konfirmasi Kata Sandi Field -->
                            <div class="form-group">
                                <label class="col-form-label">Konfirmasi Kata Sandi</label>
                                <div class="form-input position-relative">
                                    <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                        type="password" name="password_confirmation" placeholder="*********">
                                    <div class="show-hide">
                                        <span class="show"></span>
                                    </div>
                                </div>
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block w-100" type="submit">Buat Akun</button>
                            </div>
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
    <script src="{{ asset('theme') }}/assets/js/form-wizard/form-wizard-five.js"></script>
    <script src="{{ asset('theme') }}/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('theme') }}/assets/js/script.js"></script>
    <script src="{{ asset('theme') }}/assets/js/theme-customizer/customizer.js"></script>
@endpush
