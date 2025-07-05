<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poli | RSKurangSehat</title>

    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{url('/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('/admin/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/admin/dist/css/adminlte.min.css?v=3.2.0')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('/admin/plugins/summernote/summernote-bs4.min.css')}}">

    <script data-cfasync="false" nonce="99c038d4-6e86-4fa4-9030-720120372f37">
        try {
            (function(w, d) {
                ! function(j, k, l, m) {
                    if (j.zaraz) console.error("zaraz is loaded twice");
                    else {
                        j[l] = j[l] || {};
                        j[l].executed = [];
                        j.zaraz = {
                            deferred: [],
                            listeners: []
                        };
                        j.zaraz._v = "5850";
                        j.zaraz._n = "99c038d4-6e86-4fa4-9030-720120372f37";
                        j.zaraz.q = [];
                        j.zaraz._f = function(n) {
                            return async function() {
                                var o = Array.prototype.slice.call(arguments);
                                j.zaraz.q.push({
                                    m: n,
                                    a: o
                                })
                            }
                        };
                        for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                        j.zaraz.init = () => {
                            var q = k.getElementsByTagName(m)[0],
                                r = k.createElement(m),
                                s = k.getElementsByTagName("title")[0];
                            s && (j[l].t = k.getElementsByTagName("title")[0].text);
                            j[l].x = Math.random();
                            j[l].w = j.screen.width;
                            j[l].h = j.screen.height;
                            j[l].j = j.innerHeight;
                            j[l].e = j.innerWidth;
                            j[l].l = j.location.href;
                            j[l].r = k.referrer;
                            j[l].k = j.screen.colorDepth;
                            j[l].n = k.characterSet;
                            j[l].o = (new Date).getTimezoneOffset();
                            if (j.dataLayer)
                                for (const t of Object.entries(Object.entries(dataLayer).reduce(((u, v) => ({
                                        ...u[1],
                                        ...v[1]
                                    })), {}))) zaraz.set(t[0], t[1], {
                                    scope: "page"
                                });
                            j[l].q = [];
                            for (; j.zaraz.q.length;) {
                                const w = j.zaraz.q.shift();
                                j[l].q.push(w)
                            }
                            r.defer = !0;
                            for (const x of [localStorage, sessionStorage]) Object.keys(x || {}).filter((z => z.startsWith("_zaraz_"))).forEach((y => {
                                try {
                                    j[l]["z_" + y.slice(7)] = JSON.parse(x.getItem(y))
                                } catch {
                                    j[l]["z_" + y.slice(7)] = x.getItem(y)
                                }
                            }));
                            r.referrerPolicy = "origin";
                            r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                            q.parentNode.insertBefore(r, q)
                        };
                        ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init)
                    }
                }(w, d, "zarazData", "script");
                window.zaraz._p = async bs => new Promise((bt => {
                    if (bs) {
                        bs.e && bs.e.forEach((bu => {
                            try {
                                const bv = d.querySelector("script[nonce]"),
                                    bw = bv?.nonce || bv?.getAttribute("nonce"),
                                    bx = d.createElement("script");
                                bw && (bx.nonce = bw);
                                bx.innerHTML = bu;
                                bx.onload = () => {
                                    d.head.removeChild(bx)
                                };
                                d.head.appendChild(bx)
                            } catch (by) {
                                console.error(`Error executing script: ${bu}\n`, by)
                            }
                        }));
                        Promise.allSettled((bs.f || []).map((bz => fetch(bz[0], bz[1]))))
                    }
                    bt()
                }));
                zaraz._p({
                    "e": ["(function(w,d){})(window,document)"]
                });
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>

    <style>
        /* Modern Theme for RSKurangSehat with Improved Sidebar */
        body {
            font-family: 'Poppins', sans-serif !important;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            background-attachment: fixed !important;
        }

        /* Hide preloader after loading */
        .preloader {
            display: none !important;
        }

        /* Updated Sidebar Styling - More Visible */
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

        /* Content Header */
        .content-header {
            background: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: blur(10px) !important;
            border-radius: 15px !important;
            margin: 1rem !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1) !important;
        }

        .content-header h1 {
            color: #007bff !important;
            font-weight: 600 !important;
        }

        /* Breadcrumb */
        .breadcrumb {
            background: rgba(255, 255, 255, 0.7) !important;
            border-radius: 10px !important;
            padding: 10px 15px !important;
        }

        .breadcrumb-item a {
            color: #007bff !important;
            text-decoration: none !important;
        }

        .breadcrumb-item.active {
            color: #6c757d !important;
        }

        /* Cards */
        .card {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            border-radius: 15px !important;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1) !important;
            margin-bottom: 20px !important;
        }

        .card-header {
            background: linear-gradient(135deg, #007bff, #0056b3) !important;
            color: white !important;
            border-bottom: none !important;
            border-radius: 15px 15px 0 0 !important;
            font-weight: 600 !important;
            padding: 15px 20px !important;
        }

        .card-title {
            color: white !important;
            font-weight: 600 !important;
        }

        .card-body {
            padding: 25px !important;
        }

        /* Alert Styling */
        .alert {
            border-radius: 10px !important;
            border: none !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
            font-weight: 500 !important;
            margin-bottom: 20px !important;
        }

        .alert-danger {
            background: linear-gradient(135deg, #e74c3c, #c0392b) !important;
            color: white !important;
        }

        .alert-success {
            background: linear-gradient(135deg, #27ae60, #2ecc71) !important;
            color: white !important;
        }

        /* Form styling */
        .form-label {
            font-weight: 600 !important;
            color: #495057 !important;
            margin-bottom: 8px !important;
        }

        .form-control {
            border: 2px solid #e9ecef !important;
            border-radius: 8px !important;
            padding: 12px 15px !important;
            font-size: 14px !important;
            transition: all 0.3s ease !important;
            background: rgba(255, 255, 255, 0.9) !important;
        }

        .form-control:focus {
            border-color: #007bff !important;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25) !important;
            background: white !important;
        }

        .form-control[readonly] {
            background-color: #f8f9fa !important;
            border-color: #dee2e6 !important;
            color: #6c757d !important;
        }

        /* Button styling */
        .btn-danger {
            background: linear-gradient(135deg, #e74c3c, #c0392b) !important;
            border: none !important;
            border-radius: 8px !important;
            font-weight: 600 !important;
            padding: 12px 25px !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3) !important;
        }

        .btn-danger:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4) !important;
            background: linear-gradient(135deg, #c0392b, #a93226) !important;
        }

        .btn-primary {
            background: linear-gradient(135deg, #007bff, #0056b3) !important;
            border: none !important;
            border-radius: 8px !important;
            font-weight: 600 !important;
            padding: 12px 25px !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3) !important;
        }

        .btn-primary:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4) !important;
            background: linear-gradient(135deg, #0056b3, #004085) !important;
        }

        /* Table styling */
        .table-striped {
            background: rgba(255, 255, 255, 0.9) !important;
            border-radius: 10px !important;
            overflow: hidden !important;
        }

        .table-striped thead th {
            background: linear-gradient(135deg, #007bff, #0056b3) !important;
            color: white !important;
            border: none !important;
            font-weight: 600 !important;
            padding: 15px 12px !important;
            font-size: 13px !important;
            text-align: center !important;
        }

        .table-striped tbody tr {
            border-bottom: 1px solid rgba(0, 123, 255, 0.1) !important;
        }

        .table-striped tbody tr:hover {
            background: rgba(0, 123, 255, 0.05) !important;
        }

        .table-striped tbody td {
            padding: 12px !important;
            vertical-align: middle !important;
            font-size: 13px !important;
            text-align: center !important;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 123, 255, 0.02) !important;
        }

        /* Badge styling */
        .badge {
            padding: 6px 12px !important;
            border-radius: 20px !important;
            font-size: 11px !important;
            font-weight: 600 !important;
        }

        .bg-success {
            background: linear-gradient(135deg, #28a745, #20c997) !important;
        }

        .badge-info {
            background: linear-gradient(135deg, #17a2b8, #3498db) !important;
        }

        /* Warning text styling */
        .warning-text {
            color: #e74c3c !important;
            font-weight: 600 !important;
            background: rgba(231, 76, 60, 0.1) !important;
            padding: 10px 15px !important;
            border-radius: 8px !important;
            border-left: 4px solid #e74c3c !important;
            margin-bottom: 15px !important;
        }

        .success-text {
            color: #27ae60 !important;
            font-weight: 700 !important;
            background: rgba(39, 174, 96, 0.1) !important;
            padding: 15px 20px !important;
            border-radius: 10px !important;
            border-left: 4px solid #27ae60 !important;
            margin-top: 20px !important;
            text-align: center !important;
        }

        /* Make sure content is visible */
        .wrapper {
            min-height: 100vh !important;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card {
                margin: 10px 5px !important;
            }
            
            .table-striped {
                font-size: 12px !important;
            }
            
            .table-striped thead th,
            .table-striped tbody td {
                padding: 8px 6px !important;
            }
            
            .btn-danger,
            .btn-primary {
                width: 100% !important;
                margin-bottom: 10px !important;
            }
            
            .content-header {
                margin: 0.5rem !important;
            }
        }

        /* Custom spacing */
        .mb-3 {
            margin-bottom: 1.5rem !important;
        }

        .mt-3 {
            margin-top: 1.5rem !important;
        }

        /* Footer */
        .main-footer {
            background: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: blur(10px) !important;
            border-top: 1px solid rgba(255, 255, 255, 0.2) !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
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
                            <!-- Message Start -->
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
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{url('/admin/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{url('/admin/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
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
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{url('/admin/dist/img/AdminLTELogo.png')}}" alt="RSKurangSehat Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">RSKurangSehat</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
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
                            <a href="/periksa" class="nav-link">
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
                            <a href="/list-dokter" class="nav-link">
                                <i class="nav-icon fas fa-user-md"></i>
                                <p>Pemeriksaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/poli" class="nav-link active">
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
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                <i class="fas fa-hospital-symbol mr-2"></i>
                                Poli
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Poli</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    
                    <!-- Alert Messages -->
                    @if ($errors->has('daftar_error'))
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        {{ $errors->first('daftar_error') }}
                    </div>
                    @endif

                    @if (session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle mr-2"></i>
                        {{ session('success') }}
                    </div>
                    @endif

                    <!-- Registration Notice -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="warning-text">
                                        <i class="fas fa-info-circle mr-2"></i>
                                        Jika Anda Belum mendaftar, silahkan daftar dibawah ini!
                                    </div>
                                    <a href="/daftar-poli">
                                        <button class="btn btn-danger">
                                            <i class="fas fa-plus-circle mr-2"></i>
                                            Daftar Poli
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content Row -->
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <!-- Patient Data Card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-user-plus mr-2"></i>
                                        Data Pasien
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <input type="hidden" value="145" name="id_pasien">
                                        
                                        <div class="mb-3">
                                            <label for="no_rm" class="form-label">
                                                <i class="fas fa-id-card mr-1"></i>
                                                Nomor Rekam Medis
                                            </label>
                                            <input type="text" class="form-control" id="no_rm" 
                                                   placeholder="Nomor rekam medis" name="no_rm" 
                                                   value="{{$rekam}}" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="nama_pasien" class="form-label">
                                                <i class="fas fa-user mr-1"></i>
                                                Nama Pasien
                                            </label>
                                            <input type="text" class="form-control" id="nama_pasien" 
                                                   placeholder="Nama pasien" name="name" 
                                                   value="{{ $pasien->user->nama }}" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">
                                                <i class="fas fa-map-marker-alt mr-1"></i>
                                                Alamat
                                            </label>
                                            <input type="text" class="form-control" id="alamat" 
                                                   placeholder="Alamat pasien" name="alamat" 
                                                   value="{{ $pasien->user->alamat }}" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="keluhan" class="form-label">
                                                <i class="fas fa-notes-medical mr-1"></i>
                                                Keluhan Terakhir
                                            </label>
                                            <input type="text" class="form-control" id="keluhan" 
                                                   placeholder="Keluhan terakhir" name="keluhan" 
                                                   value="{{ $periksa->keluhan ?? 'Belum ada keluhan' }}" readonly>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-8 col-md-12">
                            <!-- Registration History Card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-history mr-2"></i>
                                        Riwayat Daftar Poli
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Poli</th>
                                                    <th scope="col">Dokter</th>
                                                    <th scope="col">Hari</th>
                                                    <th scope="col">Jam Operasional</th>
                                                    <th scope="col">Waktu Selesai</th>
                                                    <th scope="col">Antrian</th>
                                                    <th scope="col">Tanggal Daftar</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($riwayat as $index => $item)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $item->jadwal->poli->nama_poli ?? '-' }}</td>
                                                    <td>{{ $item->jadwal->dokter->user->nama ?? '-' }}</td>
                                                    <td>{{ $item->jadwal->hari ?? '-' }}</td>
                                                    <td>
                                                        {{ $item->jadwal->jam_mulai ?? '-' }} s/d 
                                                        {{ $item->jadwal->jam_selesai ?? '-' }}
                                                    </td>
                                                    <td>
                                                        @if ($item->periksa && $item->periksa->status === 'sudah diperiksa' && $item->periksa->waktu_diperiksa)
                                                            {{ \Carbon\Carbon::parse($item->periksa->waktu_diperiksa)->setTimezone('Asia/Jakarta')->format('H:i') }}
                                                        @else
                                                            <span class="text-muted">Belum Diperiksa</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-info">{{ $item->no_antrean }}</span>
                                                    </td>
                                                    <td>{{ \Carbon\Carbon::parse($item->tanggal_daftar)->format('d-m-Y') }}</td>
                                                    <td>
                                                        <span class="badge bg-success">
                                                            <i class="fas fa-check mr-1"></i>
                                                            Terdaftar
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <small class="text-success">
                                                            <i class="fas fa-info-circle mr-1"></i>
                                                            Anda Sudah Terdaftar Silahkan Ditunggu!
                                                        </small>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="10" class="text-center text-muted">
                                                        <i class="fas fa-inbox mr-2"></i>
                                                        Tidak ada data riwayat pendaftaran
                                                    </td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bottom Notice -->
                    <div class="row">
                        <div class="col-12">
                            <div class="success-text">
                                <i class="fas fa-clipboard-check mr-2"></i>
                                <strong>Jika Sudah Terdaftar, Silahkan Langsung ke Menu Pemeriksaan Untuk Melanjutkan!</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Additional Section -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Additional content can be added here -->
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2024 <a href="#">RSKurangSehat</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ url('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ url('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ url('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('admin/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('admin/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('admin/dist/js/pages/dashboard.js') }}"></script>

</body>

</html>