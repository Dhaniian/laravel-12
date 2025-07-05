@extends('layouts.main')
@section('content-header')

<style>
    /* Additional custom styles for Daftar Poli page */
    .form-container {
        background: rgba(255, 255, 255, 0.95) !important;
        backdrop-filter: blur(10px) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        border-radius: 15px !important;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1) !important;
        padding: 30px !important;
        margin-bottom: 20px !important;
    }

    .page-title {
        color: #007bff !important;
        font-weight: 700 !important;
        font-size: 2rem !important;
        margin-bottom: 25px !important;
        text-align: center !important;
        background: linear-gradient(135deg, #007bff, #0056b3) !important;
        -webkit-background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
        background-clip: text !important;
    }

    /* Alert Styling */
    .alert {
        border-radius: 10px !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
        font-weight: 500 !important;
        margin-bottom: 20px !important;
        padding: 15px 20px !important;
    }

    .alert-success {
        background: linear-gradient(135deg, #27ae60, #2ecc71) !important;
        color: white !important;
    }

    .alert-danger {
        background: linear-gradient(135deg, #e74c3c, #c0392b) !important;
        color: white !important;
    }

    .alert-dismissible .close {
        color: white !important;
        opacity: 0.8 !important;
        font-size: 1.2rem !important;
    }

    .alert-dismissible .close:hover {
        opacity: 1 !important;
    }

    .alert ul {
        margin-bottom: 0 !important;
        padding-left: 20px !important;
    }

    /* Form Styling */
    .form-label {
        font-weight: 600 !important;
        color: #495057 !important;
        margin-bottom: 8px !important;
        font-size: 14px !important;
    }

    .form-control, .form-select {
        border: 2px solid #e9ecef !important;
        border-radius: 8px !important;
        padding: 12px 15px !important;
        font-size: 14px !important;
        transition: all 0.3s ease !important;
        background: rgba(255, 255, 255, 0.9) !important;
        color: #495057 !important;
    }

    .form-control:focus, .form-select:focus {
        border-color: #007bff !important;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25) !important;
        background: white !important;
        outline: none !important;
    }

    .form-select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 6 7 7 7-7'/%3e%3c/svg%3e") !important;
        background-repeat: no-repeat !important;
        background-position: right 12px center !important;
        background-size: 16px 12px !important;
        appearance: none !important;
    }

    .form-select option {
        padding: 10px !important;
        color: #495057 !important;
    }

    .form-select option:disabled {
        color: #6c757d !important;
        background-color: #f8f9fa !important;
    }

    /* Input Date Styling */
    input[type="date"] {
        position: relative !important;
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
        color: #007bff !important;
        opacity: 1 !important;
        cursor: pointer !important;
    }

    /* Button Styling */
    .btn {
        font-weight: 600 !important;
        padding: 12px 25px !important;
        border-radius: 8px !important;
        font-size: 14px !important;
        transition: all 0.3s ease !important;
        border: none !important;
        margin-right: 10px !important;
        margin-bottom: 10px !important;
    }

    .btn-primary {
        background: linear-gradient(135deg, #007bff, #0056b3) !important;
        color: white !important;
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3) !important;
    }

    .btn-primary:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4) !important;
        background: linear-gradient(135deg, #0056b3, #004085) !important;
    }

    .btn-warning {
        background: linear-gradient(135deg, #ffc107, #fd7e14) !important;
        color: white !important;
        box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3) !important;
    }

    .btn-warning:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 20px rgba(255, 193, 7, 0.4) !important;
        background: linear-gradient(135deg, #fd7e14, #dc3545) !important;
        color: white !important;
    }

    /* Form Group Spacing */
    .mb-3 {
        margin-bottom: 1.5rem !important;
    }

    /* Button Container */
    .button-container {
        text-align: center !important;
        margin-top: 25px !important;
        padding-top: 20px !important;
        border-top: 1px solid rgba(0, 123, 255, 0.1) !important;
    }

    /* Container Styling */
    .container {
        max-width: 600px !important;
        margin: 0 auto !important;
        padding: 20px !important;
    }

    /* Form Icons */
    .form-label i {
        margin-right: 8px !important;
        color: #007bff !important;
        font-size: 14px !important;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 15px !important;
        }
        
        .form-container {
            padding: 20px !important;
            margin: 10px !important;
        }
        
        .page-title {
            font-size: 1.5rem !important;
            margin-bottom: 20px !important;
        }
        
        .btn {
            width: 100% !important;
            margin-right: 0 !important;
            margin-bottom: 10px !important;
        }
        
        .button-container {
            text-align: stretch !important;
        }
    }

    /* Loading State for Select */
    .form-select:disabled {
        background-color: #f8f9fa !important;
        border-color: #dee2e6 !important;
        color: #6c757d !important;
        cursor: not-allowed !important;
    }

    /* Validation Styling */
    .is-invalid {
        border-color: #dc3545 !important;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25) !important;
    }

    .invalid-feedback {
        color: #dc3545 !important;
        font-size: 12px !important;
        margin-top: 5px !important;
        font-weight: 500 !important;
    }

    /* Form Animation */
    .form-container {
        animation: slideUp 0.5s ease-out !important;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Select Option Styling */
    select option[disabled] {
        color: #6c757d !important;
        font-style: italic !important;
    }

    /* Required Field Indicator */
    .form-label.required::after {
        content: " *";
        color: #e74c3c;
        font-weight: bold;
    }
</style>

<div class="container">
    <div class="form-container">
        <h2 class="page-title">
            <i class="fas fa-clipboard-list mr-2"></i>
            Daftar Poli
        </h2>

        <!-- Tampilkan pesan sukses jika ada -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle mr-2"></i>
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <!-- Tampilkan pesan error jika ada -->
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Error!</strong> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <strong>Terjadi kesalahan!</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <form action="{{ route('poli-daftar.create') }}" method="POST" id="daftarPoliForm">
            @csrf

            <div class="mb-3">
                <label for="id_pasien" class="form-label required">
                    <i class="fas fa-user"></i>
                    Nama Pasien
                </label>
                <select name="id_pasien" id="id_pasien" class="form-select" required>
                    <option value="">-- Cari Nama Anda --</option>
                    @foreach ($pasien as $p)
                    <option value="{{ $p->id }}" {{ old('id_pasien') == $p->id ? 'selected' : '' }}>
                        {{ $p->user->nama }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_poli" class="form-label required">
                    <i class="fas fa-hospital"></i>
                    Pilih Poli
                </label>
                <select name="id_poli" id="id_poli" class="form-select" required>
                    <option value="">-- Pilih Poli --</option>
                    @foreach ($poli as $j)
                    <option value="{{ $j->id }}" {{ old('id_poli') == $j->id ? 'selected' : '' }}>
                        {{ $j->nama_poli }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal_daftar" class="form-label required">
                    <i class="fas fa-calendar-alt"></i>
                    Tanggal Daftar
                </label>
                <input type="date" name="tanggal_daftar" id="tanggal_daftar" class="form-control" required 
                       value="{{ old('tanggal_daftar', date('Y-m-d')) }}" min="{{ date('Y-m-d') }}">
            </div>

            <div class="mb-3">
                <label for="id_jadwal" class="form-label required">
                    <i class="fas fa-clock"></i>
                    Pilih Jadwal Dokter
                </label>
                <select name="id_jadwal" id="id_jadwal" class="form-select" required>
                    <option value="">-- Pilih Jadwal --</option>
                    @foreach ($jadwal as $j)
                    <option
                        value="{{ $j->id }}"
                        data-poli="{{ $j->id_poli }}"
                        {{ $j->status_aktif ? '' : 'disabled' }}
                        {{ old('id_jadwal') == $j->id ? 'selected' : '' }}>
                        <i class="fas fa-user-md"></i> {{ $j->dokter->user->nama }} - 
                        <i class="fas fa-calendar"></i> {{ $j->hari }} 
                        (<i class="fas fa-clock"></i> {{ $j->jam_mulai }} - {{ $j->jam_selesai }}) 
                        {{ $j->status_aktif ? '' : '[Tutup]' }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="button-container">
                <button type="submit" class="btn btn-primary" id="submitBtn">
                    <i class="fas fa-save mr-2"></i>
                    Daftar
                </button>
                <a href="/poli" class="btn btn-warning">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const jadwalSelect = document.getElementById("id_jadwal");
        const poliSelect = document.getElementById("id_poli");
        const submitBtn = document.getElementById("submitBtn");
        const form = document.getElementById("daftarPoliForm");

        // Saat poli diubah, filter jadwal
        poliSelect.addEventListener("change", function() {
            const selectedPoli = this.value;

            [...jadwalSelect.options].forEach(option => {
                if (option.value === "") return; // skip placeholder

                const poliId = option.getAttribute("data-poli");

                // tampilkan hanya jadwal yang sesuai poli
                option.style.display = poliId === selectedPoli ? "block" : "none";
            });

            jadwalSelect.value = ""; // reset pilihan jadwal
            
            // Disable jadwal select jika tidak ada poli yang dipilih
            if (selectedPoli === "") {
                jadwalSelect.disabled = true;
            } else {
                jadwalSelect.disabled = false;
            }
        });

        // Initial state - disable jadwal jika tidak ada poli yang dipilih
        if (poliSelect.value === "") {
            jadwalSelect.disabled = true;
        }

        // Form validation
        form.addEventListener("submit", function(e) {
            let isValid = true;
            const requiredFields = form.querySelectorAll("[required]");

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add("is-invalid");
                    isValid = false;
                } else {
                    field.classList.remove("is-invalid");
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert("Mohon lengkapi semua field yang wajib diisi!");
                return false;
            }

            // Loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memproses...';
            submitBtn.disabled = true;
        });

        // Remove invalid class on input
        document.querySelectorAll(".form-control, .form-select").forEach(input => {
            input.addEventListener("input", function() {
                this.classList.remove("is-invalid");
            });
        });

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll(".alert");
            alerts.forEach(alert => {
                if (alert.classList.contains("alert-success")) {
                    alert.style.transition = "opacity 0.5s ease";
                    alert.style.opacity = "0";
                    setTimeout(() => alert.remove(), 500);
                }
            });
        }, 5000);
    });
</script>

@endsection