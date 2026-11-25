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
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">تفاصيل الطالب</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <tbody>
                            <tr>
                                <th style="width: 35%">الاسم</th>
                                <td>{{ $student->name }}</td>
                            </tr>
                            <tr>
                                <th>الرقم الجامعي</th>
                                <td>{{ $student->student_number }}</td>
                            </tr>
                            <tr>
                                <th> البريد الإلكتروني</th>
                                <td>{{ $student->email }}</td>
                            </tr>
                            <tr>
                                <th>القسم الجامعي</th>
                                <td>{{ $student->department->name }}</td>
                            </tr>
                            <tr>
                                <th>الكلية الجامعية</th>
                                <td>{{ $student->department->faculty->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title"> ملخص سريع</h3>
                </div>
                <div class="card-body">
                    <p> الرقم : {{ $student->student_number }}</p>
                    <p> القسم : {{ $student->department->name }}</p>
                    <p> الكلية : {{ $student->department->faculty->name }}</p>
                </div>
            </div>
        </div>
    </div>


@endsection
