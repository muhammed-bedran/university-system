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
            <h1> {{ __('student.welcome',['name'=>$student->name]) }}</h1>
            <p class="home-sub">بياناتك الأكاديمية في بوابة الطالب</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title"> {{ __('student.details') }}</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <tbody>
                            <tr>
                                <th style="width: 35%">{{ __('student.name') }}</th>
                                <td>{{ $student->name }}</td>
                            </tr>
                            <tr>
                                <th> {{ __('student.student_number') }}</th>
                                <td>{{ $student->student_number }}</td>
                            </tr>
                            <tr>
                                <th> {{ __('student.email') }}</th>
                                <td>{{ $student->email }}</td>
                            </tr>
                            <tr>
                                <th> {{ __('student.department') }}</th>
                                <td>{{ $student->department->name }}</td>
                            </tr>
                            <tr>
                                <th> {{ __('student.faculty') }}</th>
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
                    <h3 class="card-title"> {{ __('student.summary') }} </h3>
                </div>
                <div class="card-body">
                    <p> {{ __('student.student_number') }} : {{ $student->student_number }}</p>
                    <p> {{ __('student.department') }} : {{ $student->department->name }}</p>
                    <p> {{ __('student.faculty') }} : {{ $student->department->faculty->name }}</p>
                </div>
            </div>
        </div>
    </div>


@endsection
