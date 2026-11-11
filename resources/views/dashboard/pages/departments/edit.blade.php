@extends('layouts.dashboard.index')

@section('title', 'تعديل القسم')
@section('breadcrumb')
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> تعديل القسم </a>
    </li>
@endsection
@section('content')


    <div class="card table-card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">

                <a href="{{ route('dashboard.departments.index') }}" class="btn btn-primary btn-sm">

                    <i class="fas fa-list-alt ml-2"></i>  قائمة الأقسام

                </a>

            </h3>

        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.departments.update', $department->id) }}" method="post">
                @csrf
                @method('PUT')
                @include('dashboard.pages.departments._form')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
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