@extends('layouts.dashboard.index')

@section('title', 'قائمة الطلاب')
@section('breadcrumb')
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> قائمة الطلاب </a>
    </li>
@endsection
@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card table-card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">

                <a href="{{ route('dashboard.students.index') }}" class="btn btn-primary btn-sm">

                    <i class="fas fa-list-alt ml-2"></i> قائمة الطلاب

                </a>

            </h3>

        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.students.store') }}" method="post">
                @csrf
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