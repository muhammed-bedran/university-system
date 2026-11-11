@extends('layouts.dashboard.index')

@section('title', 'عرض القسم')
@section('breadcrumb')
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">عرض الأقسام</a>
    </li>
@endsection
@section('content')


    <div class="card table-card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">

                <a href="{{ route('dashboard.departments.index') }}" class="btn btn-primary btn-sm">

                    <i class="fas fa-list-alt ml-2"></i> قائمة الأقسام

                </a>

            </h3>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">اسم القسم</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $department->name }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="code">رمز القسم</label>
                        <input type="text" id="code" name="code" class="form-control" value="{{ $department->code }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="faculty">الكلية</label>
                        <input type="text" id="faculty" name="faculty" class="form-control" value="{{ $department->faculty->name }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection







@push('styles')
    <style>

    </style>
@endpush
@push('scripts')
    <script>

    </script>
@endpush