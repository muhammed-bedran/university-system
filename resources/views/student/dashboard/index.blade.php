@extends('layouts.student.index')

@section('title', 'لوحتي')

@section('breadcrumb')
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">لوحتي</a>
    </li>
@endsection

@section('content')
    <div class="home-topbar mb-4">
        <div>
            <h1>مرحباً، {{ $student->name }}</h1>
            <p class="home-sub">بياناتك الأكاديمية في بوابة الطالب</p>
        </div>
    </div>


@endsection
