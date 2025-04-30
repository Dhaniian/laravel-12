<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Inter -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
    
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
    
    <!-- OverlayScrollbars -->
    <link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('lte/plugins/daterangepicker/daterangepicker.css')}}">
    
    <!-- Summernote -->
    <link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.min.css')}}">

    <!-- Custom Styles -->
    <style>
        /* === GLOBAL STYLING === */
        :root {
            --primary-color: #4f46e5;
            --primary-dark: #4338ca;
            --primary-light: #818cf8;
            --secondary-color: #10b981;
            --sidebar-bg: #111827;
            --sidebar-hover: #1f2937;
            --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --header-height: 60px;
        }
        
        body {
            background-color: #f9fafb;
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }
        
        /* === PRELOADER === */
        .preloader {
            background: linear-gradient(to right, rgba(255,255,255,0.95), rgba(249,250,251,0.9));
            backdrop-filter: blur(8px);
            z-index: 9999;
        }
        
        .preloader img {
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* === NAVBAR STYLING === */
        .main-header {
            height: var(--header-height);
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            background: #ffffff;
            border: none;
            padding: 0 1rem;
            z-index: 1030;
        }
        
        .navbar {
            padding: 0;
        }
        
        .navbar .nav-link {
            color: #4b5563 !important;
            padding: 0.5rem 0.75rem;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
            position: relative;
        }
        
        .navbar .nav-link:hover {
            color: var(--primary-color) !important;
            background-color: rgba(79, 70, 229, 0.05);
        }
        
        .navbar .nav-link i {
            font-size: 1.1rem;
        }
        
        /* Notification badges */
        .navbar-badge {
            position: absolute;
            top: 3px;
            right: 3px;
            font-size: 0.6rem;
            font-weight: 600;
            padding: 0.15rem 0.35rem;
            border-radius: 50rem;
        }
        
        /* Search box */
        .navbar-search-block {
            right: 0;
            left: 0;
            top: var(--header-height);
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border-radius: 0 0 0.5rem 0.5rem;
        }
        
        .form-control-navbar {
            background-color: #f3f4f6;
            border: none;
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            height: 40px;
        }
        
        .form-control-navbar:focus {
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        
        .btn-navbar {
            background-color: #f3f4f6;
            border: none;
            padding: 0.375rem 0.75rem;
        }
        
        .btn-navbar:hover {
            background-color: #e5e7eb;
        }
        
        /* Dropdown menus */
        .dropdown-menu {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 0.5rem 0;
            min-width: 14rem;
        }
        
        .dropdown-item {
            padding: 0.5rem 1rem;
            color: #4b5563;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .dropdown-item:hover {
            background-color: rgba(79, 70, 229, 0.05);
            color: var(--primary-color);
            transform: translateX(3px);
        }
        
        .dropdown-item i {
            margin-right: 0.5rem;
            font-size: 0.875rem;
            width: 1.25rem;
            text-align: center;
        }
        
        .dropdown-divider {
            margin: 0.25rem 0;
            opacity: 0.1;
        }
        
        .dropdown-item-title {
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 0.25rem;
        }
        
        .dropdown-footer, .dropdown-header {
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.025em;
        }
        
        .dropdown-header {
            color: #6b7280;
            background-color: #f9fafb;
        }
        
        .dropdown-footer {
            color: var(--primary-color);
            text-align: center;
        }
        
        .media {
            align-items: center;
        }
        
        .media-body {
            margin-left: 0.75rem;
        }
        
        .img-circle {
            border-radius: 50%;
            border: 2px solid #e5e7eb;
        }
        
        /* === SIDEBAR STYLING === */
        .main-sidebar {
            background: var(--sidebar-bg);
            backdrop-filter: blur(10px);
            border-right: none;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            width: 250px;
        }
        
        /* Brand Logo */
        .brand-link {
            background: rgba(255, 255, 255, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            height: var(--header-height);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }
        
        .brand-link img {
            opacity: 0.9;
            max-height: 35px;
            transition: all 0.3s ease;
        }
        
        .brand-link:hover img {
            opacity: 1;
            transform: scale(1.05);
        }
        
        /* User Panel */
        .user-panel {
            background: rgba(255, 255, 255, 0.04);
            border-radius: 0.5rem;
            margin: 1rem;
            padding: 0.75rem;
            transition: all 0.3s ease;
        }
        
        .user-panel:hover {
            background: rgba(255, 255, 255, 0.06);
        }
        
        .user-panel .image img {
            border: 2px solid rgba(255, 255, 255, 0.2);
            height: 2.5rem;
            width: 2.5rem;
            transition: all 0.3s ease;
        }
        
        .user-panel:hover .image img {
            border-color: var(--primary-light);
            transform: scale(1.05);
        }
        
        .user-panel .info a {
            color: #e5e7eb;
            font-weight: 500;
            font-size: 0.875rem;
            padding-left: 0.5rem;
        }
        
        /* Search Form */
        .form-control-sidebar {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: #e5e7eb;
            border-radius: 0.375rem;
            height: 38px;
            margin: 0 1rem;
            width: calc(100% - 2rem);
        }
        
        .form-control-sidebar:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.25);
        }
        
        .btn-sidebar {
            color: rgba(255, 255, 255, 0.6);
        }
        
        /* Navigation Menu */
        .nav-sidebar {
            padding: 0.5rem 0.75rem;
        }
        
        .nav-sidebar .nav-item {
            margin-bottom: 0.25rem;
        }
        
        .nav-sidebar .nav-link {
            border-radius: 0.375rem;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 500;
            padding: 0.65rem 1rem;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
        }
        
        .nav-sidebar .nav-link:hover,
        .nav-sidebar .nav-link.active {
            background: var(--sidebar-hover);
            color: #ffffff;
            transform: translateX(3px);
        }
        
        .nav-sidebar .nav-link.active {
            box-shadow: inset 4px 0 0 var(--primary-light);
        }
        
        .nav-sidebar .nav-icon {
            color: rgba(255, 255, 255, 0.5);
            font-size: 1rem;
            margin-right: 0.75rem;
            text-align: center;
            width: 1.25rem;
            transition: all 0.2s ease;
        }
        
        .nav-sidebar .nav-link:hover .nav-icon,
        .nav-sidebar .nav-link.active .nav-icon {
            color: var(--primary-light);
        }
        
        .nav-sidebar .nav-header {
            color: rgba(255, 255, 255, 0.4);
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            padding: 0.75rem 1rem 0.5rem;
            text-transform: uppercase;
        }
        
        /* Tree View */
        .nav-treeview {
            padding-left: 1rem;
        }
        
        .nav-treeview .nav-link {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
            margin-left: 0.75rem;
        }
        
        .nav-treeview .nav-link:hover {
            color: rgba(255, 255, 255, 0.8);
        }
        
        .menu-open > .nav-link i.right {
            transform: rotate(90deg);
        }
        
        /* Badge in Nav */
        .badge-nav {
            background: rgba(129, 140, 248, 0.2);
            border-radius: 0.375rem;
            font-size: 0.65rem;
            font-weight: 600;
            padding: 0.25rem 0.5rem;
            margin-left: auto;
            transition: all 0.2s ease;
        }
        
        .nav-link:hover .badge-nav {
            background: rgba(129, 140, 248, 0.3);
        }
        
        /* Logout Section */
        .brand-link.logout-section {
            background: linear-gradient(to right, rgba(79, 70, 229, 0.05), rgba(79, 70, 229, 0.1));
            border-radius: 0;
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 0.75rem 1rem;
            display: flex;
            justify-content: center;
        }
        
        .logout-btn {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            border: none;
            border-radius: 0.375rem;
            color: white;
            font-weight: 500;
            padding: 0.5rem 1.25rem;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .logout-btn:hover {
            box-shadow: 0 4px 6px -1px rgba(220, 38, 38, 0.3);
            transform: translateY(-2px);
        }
        
        .logout-btn:active {
            transform: translateY(0);
        }
        
        /* === CONTENT WRAPPER === */
        .content-wrapper {
            background-color: #f9fafb;
            padding: 1.5rem;
            min-height: calc(100vh - var(--header-height));
            transition: all 0.3s ease;
        }
        
        .content-header {
            padding: 0 0 1.5rem 0;
        }
        
        .content-header h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #111827;
        }
        
        /* === CARD STYLING === */
        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: var(--card-shadow);
            margin-bottom: 1.5rem;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            transform: translateY(-4px);
        }
        
        .card-header {
            background-color: #ffffff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1.25rem 1.5rem;
        }
        
        .card-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0;
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        /* === FOOTER === */
        .main-footer {
            background-color: #ffffff;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            color: #6b7280;
            font-size: 0.875rem;
            padding: 1rem 1.5rem;
        }
        
        .main-footer a {
            color: var(--primary-color);
            font-weight: 500;
            transition: color 0.2s ease;
        }
        
        .main-footer a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        /* === RESPONSIVE === */
        @media (max-width: 992px) {
            .main-sidebar {
                box-shadow: none;
            }
            
            .sidebar-open .main-sidebar {
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            }
        }
        
        /* === DARK MODE COMPATIBILITY === */
        @media (prefers-color-scheme: dark) {
            /* Add dark mode styles if needed */
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        <div class="mt-3 text-primary font-weight-bold">Loading...</div>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">
                    <i class="fas fa-home mr-1"></i> Home
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">
                    <i class="fas fa-envelope mr-1"></i> Contact
                </a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Search Dropdown -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group">
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

            <!-- Messages Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-primary navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">3 Messages</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="{{asset('lte/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-primary"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="{{asset('lte/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="{{asset('lte/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>

            <!-- Notifications Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
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

            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                    <i class="fas fa-cog"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel mt-3 d-flex">
                <div class="image">
                    <img src="{{asset('/lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    @if(Auth::check())
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    @else
                        <a href="#" class="d-block">Guest</a>
                    @endif
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline mt-3">
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
            <nav class="mt-4">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  
                    
                    
                    
                    <section class="nav-content">
                        <div class="container-fluid">
                            @yield('nav-content')
                        </div>
                    </section>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        
        <!-- Logout Section -->
        <div class="brand-link logout-section">
            <form action="{{ route('logout') }}" method="POST" style="width: 100%;">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </button>
            </form>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2025 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<!-- ./wrapper -->

<!-- JavaScript -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lte/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('lte/plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('lte/dist/js/adminlte.js')}}"></script>
<script src="{{asset('lte/dist/js/demo.js')}}"></script>
<script src="{{asset('lte/dist/js/pages/dashboard.js')}}"></script>

<!-- Custom JavaScript for animations and interactions -->
<script>
    $(document).ready(function() {
        // Add smooth scrolling
        $('a[href*="#"]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate(
                {
                    scrollTop: $($(this).attr('href')).offset().top - 80,
                },
                500,
                'linear'
            );
        });
        
        // Add hover effect to cards
        $('.card').hover(
            function() {
                $(this).addClass('shadow-lg');
            },
            function() {
                $(this).removeClass('shadow-lg');
            }
        );
        
        // Enhance sidebar menu interactions
        $('.nav-link').on('click', function() {
            if($(this).next('.nav-treeview').length) {
                $(this).next('.nav-treeview').slideToggle(300);
                $(this).toggleClass('menu-open');
                return false;
            }
        });
        
        // Custom dropdown animation
        $('.dropdown').on('show.bs.dropdown', function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown(200);
        });
        $('.dropdown').on('hide.bs.dropdown', function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
        });
    });
</script>
</body>
</html>