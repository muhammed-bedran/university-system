@extends('layouts.dashboard.index')

@section('title', 'تعديل الطلاب')
@section('breadcrumb')
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> تعديل الطلاب </a>
    </li>
@endsection
@section('content')


    <div class="card table-card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">

                <a href="{{ route('dashboard.students.index') }}" class="btn btn-primary btn-sm">

                    <i class="fas fa-list-alt ml-2"></i>  قائمة الطلاب

                </a>

            </h3>

        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.students.update', $student->id) }}" method="post">
                @csrf
                @method('PUT')
                @include('dashboard.pages.students._form')
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