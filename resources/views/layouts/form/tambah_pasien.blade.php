@extends('layouts.main')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kelola Pasien</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Kelola Dokter</li>
            </ol>
        </div>
    </div>
</div><!-- /.container-fluid -->
@endsection

@section('content')
<!-- Tampilkan pesan sukses jika ada -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Tampilkan pesan error jika ada -->
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Terjadi kesalahan!</strong>
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Pasien</h3>
                        </div>
                        <form action="{{route('admin.storepasien')}}" method="POST">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="nama">Nama Pasien</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pasien" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                                        <small class="form-text text-muted">Contoh : pasien@email.com</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="no_ktp">Nomer KTP</label>
                                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukkan Nomer KTP Anda" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="no_hp">No Telepon</label>
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomer Telepon" required>
                                        <small class="form-text text-muted">Nomer telepon harus 12 atau 13 digit</small>
                                    </div>
                                </div>

                                <!-- Password Fields -->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="cursor: pointer;" onclick="togglePassword('password', 'eye-icon-password')">
                                                    <i class="fas fa-eye" id="eye-icon-password"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Password minimal 8 karakter</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password_confirmation">Konfirmasi Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="cursor: pointer;" onclick="togglePassword('password_confirmation', 'eye-icon-confirm')">
                                                    <i class="fas fa-eye" id="eye-icon-confirm"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Ulangi password yang sama</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12 ml-4">
                                    <button type="submit" class="btn btn-info">Tambah</button>
                                    <!-- /.card-body -->
                                    <a href="/admin-kelola-pasien" class="btn btn-warning">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk toggle password -->
<script>
function togglePassword(inputId, iconId) {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}

// Validasi password match
document.addEventListener('DOMContentLoaded', function() {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');
    
    function validatePassword() {
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Password tidak cocok');
        } else {
            confirmPassword.setCustomValidity('');
        }
    }
    
    password.addEventListener('input', validatePassword);
    confirmPassword.addEventListener('input', validatePassword);
});
</script>

@endsection