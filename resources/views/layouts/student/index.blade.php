<!DOCTYPE html>
<html lang="{{ Multira::getCurrentLocale() }}" dir="{{ Multira::getCurrentLocaleDirection() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ __('student.brand') }} | @yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/custom-rtl-navy.css') }}">
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('student.dashboard') }}" class="nav-link">الرئيسية</a>
                </li>
                @yield('breadcrumb')
                        <li class="nav-item d-flex align-items-center px-2">
                            <x-multira-switcher />
                        </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">{{ __('student.logout') }} </button>
                    </form>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('student.dashboard') }}" class="brand-link text-center">
                <span class="brand-text font-weight-light"> {{ __('student.brand') }} </span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dashboard/dist/img/muhammed.png') }}" class="img-circle elevation-2"
                            alt="صورة الطالب">
                    </div>
                    <div class="info">
                        <a href="{{ route('student.dashboard') }}" class="d-block">{{ Auth::guard('student')->user()->name }}</a>
                    </div>
                </div>

                <x-nav config="student_nav" />
            </div>
        </aside>

        <div class="content-wrapper home-page">
            <div class="content">
                <div class="container-fluid home-shell">
                    @yield('content')
                </div>
            </div>
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                بوابة الطالب
            </div>
            <strong>حقوق النشر &copy; 2026 <a href="#">نظام الجامعة</a>.</strong> جميع الحقوق محفوظة.
        </footer>
    </div>

    <script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/adminlte.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
