<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Periksa | RSKurangSehat</title>

    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/admin/dist/css/adminlte.min.css?v=3.2.0')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <style>
        /* Modern Theme for RSKurangSehat - Same as Dashboard */
        body {
            font-family: 'Poppins', sans-serif !important;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            background-attachment: fixed !important;
        }

        /* Hide preloader after loading */
        .preloader {
            display: none !important;
        }

        /* Updated Sidebar Styling - Same as Dashboard */
        .main-sidebar {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%) !important;
            backdrop-filter: blur(10px) !important;
            border-right: 2px solid #3498db !important;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.3) !important;
        }

        /* Brand Logo */
        .brand-link {
            background: linear-gradient(135deg, #3498db, #2980b9) !important;
            border-bottom: 2px solid #2980b9 !important;
            color: white !important;
        }

        .brand-text {
            font-weight: 700 !important;
            color: white !important;
        }

        /* Sidebar User Panel */
        .user-panel .info a {
            color: #ecf0f1 !important;
            font-weight: 500 !important;
        }

        /* Sidebar Navigation Styling */
        .nav-sidebar .nav-link {
            color: #bdc3c7 !important;
            border-radius: 8px !important;
            margin: 3px 10px !important;
            padding: 12px 15px !important;
            transition: all 0.3s ease !important;
            border: 1px solid transparent !important;
        }

        .nav-sidebar .nav-link:hover {
            background: linear-gradient(135deg, #3498db, #2980b9) !important;
            color: white !important;
            transform: translateX(5px) !important;
            border: 1px solid #3498db !important;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3) !important;
        }

        .nav-sidebar .nav-link.active {
            background: linear-gradient(135deg, #e74c3c, #c0392b) !important;
            color: white !important;
            border: 1px solid #e74c3c !important;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.4) !important;
        }

        /* Navigation Icons */
        .nav-sidebar .nav-link .nav-icon {
            font-size: 16px !important;
            margin-right: 10px !important;
            width: 20px !important;
            text-align: center !important;
        }

        /* Navigation Text */
        .nav-sidebar .nav-link p {
            margin: 0 !important;
            font-weight: 500 !important;
            font-size: 14px !important;
        }

        /* Badge Styling */
        .nav-sidebar .badge {
            background: #e74c3c !important;
            color: white !important;
            font-size: 10px !important;
            padding: 2px 6px !important;
            border-radius: 10px !important;
        }

        /* Logout Button Styling */
        .nav-sidebar .btn-danger {
            background: linear-gradient(135deg, #e74c3c, #c0392b) !important;
            border: none !important;
            color: white !important;
            font-weight: 600 !important;
            padding: 12px !important;
            border-radius: 8px !important;
            margin: 10px !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3) !important;
        }

        .nav-sidebar .btn-danger:hover {
            background: linear-gradient(135deg, #c0392b, #a93226) !important;
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4) !important;
        }

        /* Sidebar Search */
        .form-control-sidebar {
            background: rgba(255, 255, 255, 0.1) !important;
            border: 1px solid #3498db !important;
            color: #ecf0f1 !important;
        }

        .form-control-sidebar::placeholder {
            color: #bdc3c7 !important;
        }

        .btn-sidebar {
            background: #3498db !important;
            border: 1px solid #3498db !important;
            color: white !important;
        }

        /* Navbar */
        .main-header {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2) !important;
        }

        /* Content */
        .content-wrapper {
            background: transparent !important;
        }

        /* Cards - Same as Dashboard */
        .card {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            border-radius: 15px !important;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1) !important;
            transition: all 0.3s ease !important;
        }

        .card:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15) !important;
        }

        .card-header {
            background: rgba(0, 123, 255, 0.1) !important;
            border-bottom: 1px solid rgba(0, 123, 255, 0.2) !important;
            border-radius: 15px 15px 0 0 !important;
            padding: 1.5rem !important;
        }

        .card-header .card-title {
            color: #007bff !important;
            font-weight: 600 !important;
            font-size: 1.25rem !important;
        }

        .card-body {
            padding: 2rem !important;
        }

        /* Content Header - Same as Dashboard */
        .content-header {
            background: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: blur(10px) !important;
            border-radius: 15px !important;
            margin: 1rem !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
        }

        .content-header h1 {
            color: #007bff !important;
            font-weight: 600 !important;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 1.5rem !important;
        }

        .form-label {
            font-weight: 600 !important;
            color: #495057 !important;
            margin-bottom: 0.75rem !important;
            font-size: 0.95rem !important;
        }

        .form-control, .form-select {
            border: 2px solid #e9ecef !important;
            border-radius: 10px !important;
            padding: 0.75rem 1rem !important;
            font-size: 0.95rem !important;
            transition: all 0.3s ease !important;
            background: rgba(248, 249, 250, 0.8) !important;
        }

        .form-control:focus, .form-select:focus {
            border-color: #007bff !important;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25) !important;
            background: white !important;
        }

        /* Button Styling - Same as Dashboard */
        .btn-primary {
            background: linear-gradient(135deg, #007bff, #0056b3) !important;
            border: none !important;
            border-radius: 10px !important;
            padding: 0.75rem 2rem !important;
            font-weight: 600 !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3) !important;
        }

        .btn-primary:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4) !important;
        }

        .btn-outline-primary {
            border: 2px solid #007bff !important;
            color: #007bff !important;
            border-radius: 10px !important;
            transition: all 0.3s ease !important;
        }

        .btn-outline-primary:hover {
            background: #007bff !important;
            transform: translateY(-1px) !important;
        }

        /* Alert Styling */
        .alert {
            border: none !important;
            border-radius: 10px !important;
            padding: 1rem 1.25rem !important;
            margin-bottom: 1.5rem !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
        }

        /* Table Styling */
        .table {
            border-radius: 10px !important;
            overflow: hidden !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
        }

        .table thead th {
            background: linear-gradient(135deg, #007bff, #0056b3) !important;
            color: white !important;
            font-weight: 600 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.5px !important;
            font-size: 0.85rem !important;
            padding: 1rem 0.75rem !important;
            border: none !important;
        }

        .table tbody tr {
            transition: all 0.3s ease !important;
        }

        .table tbody tr:hover {
            background: rgba(0, 123, 255, 0.05) !important;
            transform: scale(1.01) !important;
        }

        .table tbody td {
            padding: 1rem 0.75rem !important;
            vertical-align: middle !important;
            border-bottom: 1px solid rgba(0, 123, 255, 0.1) !important;
        }

        /* Badge Styling */
        .badge {
            padding: 0.5rem 1rem !important;
            border-radius: 15px !important;
            font-size: 0.8rem !important;
            font-weight: 500 !important;
        }

        /* Custom Badge Classes */
        .poli-badge {
            background: linear-gradient(135deg, #28a745, #20c997) !important;
            color: white !important;
            padding: 0.4rem 0.8rem !important;
            border-radius: 20px !important;
            font-size: 0.8rem !important;
            font-weight: 500 !important;
        }

        .dokter-info {
            font-weight: 500 !important;
            color: #495057 !important;
        }

        .date-badge {
            background: rgba(108, 117, 125, 0.1) !important;
            color: #6c757d !important;
            padding: 0.4rem 0.8rem !important;
            border-radius: 15px !important;
            font-size: 0.8rem !important;
            font-weight: 500 !important;
        }

        .time-badge {
            padding: 0.4rem 0.8rem !important;
            border-radius: 15px !important;
            font-size: 0.8rem !important;
            font-weight: 500 !important;
        }

        .time-badge.completed {
            background: rgba(40, 167, 69, 0.1) !important;
            color: #28a745 !important;
        }

        .time-badge.pending {
            background: rgba(255, 193, 7, 0.1) !important;
            color: #ffc107 !important;
        }

        .cost-badge {
            background: rgba(23, 162, 184, 0.1) !important;
            color: #17a2b8 !important;
            padding: 0.4rem 0.8rem !important;
            border-radius: 15px !important;
            font-size: 0.8rem !important;
            font-weight: 600 !important;
        }

        .cost-badge.no-cost {
            background: rgba(108, 117, 125, 0.1) !important;
            color: #6c757d !important;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .card-body {
                padding: 1rem !important;
            }
            
            .card-header {
                padding: 1rem !important;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar - Same as Dashboard -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="{{url('/admin/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container - Same as Dashboard -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{url('/admin/dist/img/AdminLTELogo.png')}}" alt="RSKurangSehat Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">RSKurangSehat</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('images/default.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->nama }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        @if (Auth::user()->role == 'dokter')
                        <li class="nav-item">
                            <a href="/obat" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/periksa" class="nav-link active">
                                <i class="nav-icon fas fa-stethoscope"></i>
                                <p>Pemeriksaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/jadwal_periksa" class="nav-link">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <p>Jadwal Periksa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/riwayatpasien" class="nav-link">
                                <i class="nav-icon fas fa-file-medical-alt"></i>
                                <p>Riwayat Periksa Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/list-obat" class="nav-link">
                                <i class="nav-icon fas fa-pills"></i>
                                <p>Obat <span class="right badge badge-danger">New</span></p>
                            </a>
                        </li>

                        @elseif (Auth::user()->role == 'pasien')
                        <li class="nav-item">
                            <a href="/dokter" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/list-dokter" class="nav-link active">
                                <i class="nav-icon fas fa-user-md"></i>
                                <p>Pemeriksaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/poli" class="nav-link">
                                <i class="nav-icon fas fa-hospital-symbol"></i>
                                <p>Poli</p>
                            </a>
                        </li>

                        @elseif (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="/dokter" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-kelola-obat" class="nav-link">
                                <i class="nav-icon fas fa-capsules"></i>
                                <p>Kelola Obat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-kelola-poli" class="nav-link">
                                <i class="nav-icon fas fa-clinic-medical"></i>
                                <p>Kelola Poli</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-kelola-pasien" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Kelola Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-kelola-dokter" class="nav-link">
                                <i class="nav-icon fas fa-user-md"></i>
                                <p>Kelola Dokter</p>
                            </a>
                        </li>
                        @endif

                        <li class="nav-item mt-3">
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-block">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Periksa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Periksa</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Form Periksa Card -->
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="card-title mb-0">
                                        <i class="fas fa-stethoscope mr-2"></i>
                                        Form Periksa
                                    </h3>
                                    <div class="header-actions">
                                        <span class="badge badge-info">
                                            <i class="fas fa-user-md"></i> Pemeriksaan Pasien
                                        </span>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <!-- Alert Messages -->
                                    @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        {{ session('error') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif

                                    @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="fas fa-check-circle mr-2"></i>
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif

                                    <!-- Validation Errors -->
                                    @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="fas fa-exclamation-circle mr-2"></i>
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

                                    <form action="{{ route('periksa.byDokter') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <!-- Dokter Selection -->
                                            <div class="col-md-6 mb-4">
                                                <div class="form-group">
                                                    <label for="id_dokter" class="form-label">
                                                        <i class="fas fa-user-md text-primary mr-2"></i>
                                                        Pilih Dokter
                                                    </label>
                                                    <select name="id_dokter" id="id_dokter" class="form-control" required>
                                                        <option value="" disabled selected>Pilih Dokter</option>
                                                        @foreach ($dokters as $dokter)
                                                        <option value="{{ $dokter->id }}">
                                                            {{ $dokter->nama }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    <small class="form-text text-muted mt-2">
                                                        <i class="fas fa-info-circle mr-1"></i>
                                                        Pilih dokter yang sesuai dengan jadwal pendaftaran Anda
                                                    </small>
                                                </div>
                                            </div>

                                            <!-- Nomor Antrean -->
                                            <div class="col-md-6 mb-4">
                                                <div class="form-group">
                                                    <label for="no_antrean" class="form-label">
                                                        <i class="fas fa-ticket-alt text-warning mr-2"></i>
                                                        Nomor Antrean
                                                    </label>
                                                    <input type="text" name="no_antrean" id="no_antrean" class="form-control" required placeholder="Masukkan nomor antrean">
                                                    <small class="form-text text-muted mt-2">
                                                        <i class="fas fa-info-circle mr-1"></i>
                                                        Masukkan nomor antrean yang Anda dapatkan saat mendaftar
                                                    </small>
                                                    <div class="d-flex align-items-center mt-2">
                                                        <small class="text-muted">Belum mendaftar?</small>
                                                        <a href="/poli" class="ml-2 btn btn-sm btn-outline-primary">
                                                            <i class="fas fa-plus mr-1"></i>
                                                            Daftar Sekarang
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Keluhan -->
                                            <div class="col-12 mb-4">
                                                <div class="form-group">
                                                    <label for="keluhan" class="form-label">
                                                        <i class="fas fa-comment-medical text-danger mr-2"></i>
                                                        Keluhan
                                                    </label>
                                                    <textarea name="keluhan" id="keluhan" class="form-control" rows="4" required placeholder="Tuliskan keluhan yang Anda alami secara detail..."></textarea>
                                                    <small class="form-text text-muted mt-2">
                                                        <i class="fas fa-info-circle mr-1"></i>
                                                        Jelaskan keluhan Anda dengan detail untuk membantu proses pemeriksaan
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-lg">
                                                <i class="fas fa-paper-plane mr-2"></i>
                                                Submit Pemeriksaan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Riwayat Periksa Card -->
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="card-title mb-0">
                                        <i class="fas fa-history mr-2"></i>
                                        Riwayat Pemeriksaan
                                    </h3>
                                    <div class="header-actions">
                                        <span class="badge badge-success">
                                            <i class="fas fa-chart-line"></i> Data Medis
                                        </span>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="periksaTable">
                                            <thead>
                                                <tr>
                                                    <th><i class="fas fa-hashtag mr-1"></i>No</th>
                                                    <th><i class="fas fa-hospital mr-1"></i>Nama Poli</th>
                                                    <th><i class="fas fa-user-md mr-1"></i>Dokter</th>
                                                    <th><i class="fas fa-calendar mr-1"></i>Tanggal</th>
                                                    <th><i class="fas fa-clock mr-1"></i>Waktu Selesai</th>
                                                    <th><i class="fas fa-money-bill-wave mr-1"></i>Total Biaya</th>
                                                    <th><i class="fas fa-info-circle mr-1"></i>Status</th>
                                                    <th><i class="fas fa-eye mr-1"></i>Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($periksas as $periksa)
                                                <tr>
                                                    <td class="fw-bold">{{ $loop->iteration }}</td>
                                                    <td>
                                                        <span class="poli-badge">
                                                            {{ $periksa->daftarPoli->jadwal->poli->nama_poli ?? 'N/A' }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="dokter-info">
                                                            <i class="fas fa-user-md text-primary mr-1"></i>
                                                            {{ $periksa->dokter->nama ?? 'N/A' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="date-badge">
                                                            <i class="fas fa-calendar-day mr-1"></i>
                                                            {{ \Carbon\Carbon::parse($periksa->tgl_periksa ?? 'N/A')->format('d-m-Y') }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        @if ($periksa->waktu_diperiksa)
                                                        <span class="time-badge completed">
                                                            <i class="fas fa-check-circle mr-1"></i>
                                                            {{ \Carbon\Carbon::parse($periksa->waktu_diperiksa)->setTimezone('Asia/Jakarta')->format('H:i') }}
                                                        </span>
                                                        @else
                                                        <span class="time-badge pending">
                                                            <i class="fas fa-hourglass-half mr-1"></i>
                                                            Belum Diperiksa
                                                        </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($periksa->biaya_periksa !== null)
                                                        <span class="cost-badge">
                                                            <i class="fas fa-rupiah-sign mr-1"></i>
                                                            {{ 'Rp' . number_format($periksa->biaya_periksa, 0, ',', '.') }}
                                                        </span>
                                                        @else
                                                        <span class="cost-badge no-cost">-</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($periksa->status === 'Selesai')
                                                        <span class="badge badge-success">
                                                            <i class="fas fa-check-circle mr-1"></i>{{ $periksa->status }}
                                                        </span>
                                                        @elseif ($periksa->status === 'Menunggu')
                                                        <span class="badge badge-warning">
                                                            <i class="fas fa-clock mr-1"></i>{{ $periksa->status }}
                                                        </span>
                                                        @else
                                                        <span class="badge badge-secondary">
                                                            <i class="fas fa-question-circle mr-1"></i>{{ $periksa->status ?? 'N/A' }}
                                                        </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{route('lihat.detail.periksa',$periksa->id)}}" class="btn btn-info btn-sm">
                                                            <i class="fas fa-eye mr-1"></i>
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2024 <a href="#">RSKurangSehat</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ url('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('admin/dist/js/adminlte.js') }}"></script>

    <script>
    $(function() {
        // Initialize DataTable with modern styling
        $("#periksaTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "pageLength": 10,
            "language": {
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Data tidak ditemukan",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data tersedia",
                "infoFiltered": "(difilter dari _MAX_ total data)",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                }
            },
            "buttons": [
                {
                    extend: 'copy',
                    text: '<i class="fas fa-copy"></i> Copy',
                    className: 'btn btn-secondary btn-sm'
                },
                {
                    extend: 'csv',
                    text: '<i class="fas fa-file-csv"></i> CSV',
                    className: 'btn btn-success btn-sm'
                },
                {
                    extend: 'excel',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    className: 'btn btn-success btn-sm'
                },
                {
                    extend: 'pdf',
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                    className: 'btn btn-danger btn-sm'
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i> Print',
                    className: 'btn btn-info btn-sm'
                }
            ]
        }).buttons().container().appendTo('#periksaTable_wrapper .col-md-6:eq(0)');

        // Add loading state to submit button
        $('form').on('submit', function() {
            let btn = $(this).find('button[type="submit"]');
            let originalText = btn.html();
            btn.html('<i class="fas fa-spinner fa-spin mr-2"></i>Memproses...');
            btn.prop('disabled', true);
        });
    });
    </script>

</body>
</html>