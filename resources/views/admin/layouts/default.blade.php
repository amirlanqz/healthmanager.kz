<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/colorbox/colorbox.css') }}">

    <style>
        .cke_notifications_area {
            display: none;
        }

        label.required::before {
            content: "* ";
            color: #ff0000;
            font-weight: 700;
        }
    </style>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
<div class="app-wrapper"> <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
                <li class="nav-item d-none d-md-block"> <a href="{{ route('home') }}" class="nav-link">Home</a> </li>
            </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
            <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="{{ asset('assets/admin/assets/img/user2-160x160.jpg')}}" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">
                            {{ auth()->user()->name }}
                        </span> </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                        <li class="user-header text-bg-primary"> <img src="{{ asset('assets/admin/assets/img/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image">
                            <p>
                                {{ auth()->user()->name }}
                            </p>
                        </li> <!--end::User Image--> <!--begin::Menu Body-->
                        <li class="user-footer">
                            <a href=" {{ route('users.edit', ['user' => auth()->user()->id]) }}" class="btn btn-default btn-flat">Profile</a>
                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-end">Logout</a>
                        </li> <!--end::Menu Footer-->
                    </ul>
                </li> <!--end::User Menu Dropdown-->
            </ul> <!--end::End Navbar Links-->
        </div> <!--end::Container-->
    </nav> <!--end::Header--> <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
        <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="{{ route('admin.main.index') }}" class="brand-link"> <!--begin::Brand Image--> <img src="{{ asset('assets/admin/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2"> <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('admin.main.index') }}" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('categories.index') }}" class="nav-link"> <i class="nav-icon bi bi-card-list"></i>
                            <p>Categories</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('posts.index') }}" class="nav-link"> <i class="nav-icon bi bi-pencil-square"></i>
                            <p>Posts</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('tags.index') }}" class="nav-link"> <i class="nav-icon bi bi-tags"></i>
                            <p>Tags</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link"> <i class="nav-icon bi bi-people"></i>
                            <p>Users</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('manager.index') }}" class="nav-link"> <i class="nav-icon bi bi-people"></i>
                            <p>Managers</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>



    <main class="app-main">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        @yield('content')
    </main>


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/admin/js/adminlte.js') }}"></script>
<script src="{{ asset('assets/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/ckeditor_4.22.1_full/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/admin/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('packages/barryvdh/elfinder/js/standalonepopup.js') }}"></script>
<script src="{{ asset('assets/admin/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/main.js') }}"></script>

</body>

</html>
