@extends('theme.default.layouts.dashboard')

@section('dashboard-content')
<div class="row">
    <!-- Kolom My Profile -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">My Profile</h4>
                <div class="card-options">
                    <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    <a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="row mb-2">
                        <div class="profile-title">
                            <div class="media">
                                <img class="img-70 rounded-circle" alt="" src="{{ asset('theme/assets/images/avtar/default_profile_image.webp') }}">
                              <div class="media-body">
                                <h5 class="mb-1">{{ $name ?? 'Nama Pengguna' }}</h5>
                                <p>{{ $jenis_kelamin ?? 'Jenis Kelamin' }}</p>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input class="form-control" placeholder="{{ $email ?? 'your-email@domain.com' }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input class="form-control" placeholder="{{ $nik ?? 'NIK tidak tersedia' }}" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bagian Edit Profile -->
    <div class="col-xl-8">
        <form class="card" action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h4 class="card-title mb-0">Edit Profile</h4>
                <div class="card-options">
                    <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    <a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Input NIK (Read-Only) -->
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input class="form-control" type="text" name="nik" value="{{ $nik ?? 'NIK tidak tersedia' }}" readonly>
                        </div>
                    </div>

                    <!-- Input Email (Read-Only) -->
                    <div class="col-sm-6 col-md-7">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ $email ?? 'Email tidak tersedia' }}" readonly>
                        </div>
                    </div>

                    <!-- Input Jenis Kelamin -->
                    <div class="col-sm-6 col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Input Tempat Lahir -->
                    <div class="col-sm-6 col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                        </div>
                    </div>

                    <!-- Input Tanggal Lahir -->
                    <div class="col-sm-6 col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tanggal_lahir" required>
                        </div>
                    </div>

                    <!-- Input Alamat -->
                    <div class="col-sm col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" rows="4" name="alamat" placeholder="Masukkan Alamat"></textarea>
                        </div>
                    </div>

                    <!-- Input Kelurahan -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Kelurahan</label>
                            <input class="form-control" type="text" name="kelurahan" placeholder="Masukkan Kelurahan" required>
                        </div>
                    </div>

                    <!-- Input Kecamatan -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Kecamatan</label>
                            <input class="form-control" type="text" name="kecamatan" placeholder="Masukkan Kecamatan" required>
                        </div>
                    </div>

                    <!-- Upload KTP -->
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Upload KTP (Opsional)</label>
                            <input class="form-control" type="file" name="ktp">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-primary" type="submit">Update Profile</button>
            </div>
        </form>
    </div>
</div>
@endsection