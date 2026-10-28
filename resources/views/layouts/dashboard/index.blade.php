<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>نظام الجامعة |   @yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap">
    <link rel="stylesheet" href="{{asset('dashboard/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/dist/css/custom-rtl-navy.css')}}">
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
                    <a href="starter.html" class="nav-link">الرئيسية</a>
                </li>
                    @yield('breadcrumb')


                    <li class="nav-item d-none d-sm-inline-block">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">تسجيل الخروج</button>
                        </form>
                    </li>



              
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search"
                                    placeholder="بحث عن طالب أو مقرر..." aria-label="بحث">
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

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="{{asset('dashboard/dist/img/user1-128x128.jpg')}}" alt="صورة المستخدم"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        د. أحمد محمد
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">طلب اعتماد جدول الامتحانات</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> منذ ساعتين</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="{{asset('dashboard/dist/img/user8-128x128.jpg')}}" alt="صورة المستخدم"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        أ. خالد العلي
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">تم رفع درجات مقرر البرمجة</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> منذ 4 ساعات</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="{{asset('dashboard/dist/img/user3-128x128.jpg')}}" alt="صورة المستخدم"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        نورة السالم
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">استفسار عن التسجيل الأكاديمي</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> منذ 5 ساعات</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">عرض جميع الرسائل</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">8</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">8 إشعارات أكاديمية</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-graduate mr-2"></i> 12 طلب قبول جديد
                            <span class="float-right text-muted text-sm">ساعة</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-book mr-2"></i> 5 مقررات بحاجة اعتماد
                            <span class="float-right text-muted text-sm">3 ساعات</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file-alt mr-2"></i> تقرير الحضور جاهز
                            <span class="float-right text-muted text-sm">يوم</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">عرض جميع الإشعارات</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="starter.html" class="brand-link text-center">
                <span class="brand-text font-weight-light">نظام الجامعة</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('dashboard/dist/img/muhammed.png')}}" class="img-circle elevation-2" alt="صورة المستخدم">
                    </div>
                    <div class="info">
                        <a href="profile.html" class="d-block">{{  Auth::user()->name }}</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <div class="input-group-prepend">
                            <button class="btn btn-sidebar" type="button">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                        <input class="form-control form-control-sidebar" type="search" placeholder="بحث..."
                            aria-label="بحث">
                    </div>
                </div>
                <x-nav />
            </div>
        </aside>

        <div class="content-wrapper home-page">
            <div class="content">
                <div class="container-fluid home-shell">
                     @yield('content')
                </div>
            </div>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>إعدادات سريعة</h5>
                <p>خيارات العرض واللغة للوحة الجامعة</p>
            </div>
        </aside>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                نظام إدارة الجامعة
            </div>
            <strong>حقوق النشر &copy; 2026 <a href="#">نظام الجامعة</a>.</strong> جميع الحقوق محفوظة.
        </footer>
    </div>

    <script src="{{asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/dist/js/adminlte.min.js')}}"></script>
    @stack('scripts')
</body>

</html>