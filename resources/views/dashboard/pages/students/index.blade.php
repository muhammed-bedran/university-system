@extends('layouts.dashboard.index')

@section('title', 'قائمة الطلاب')
@section('breadcrumb')
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> قائمة الطلاب </a>
    </li>
@endsection
@section('content')
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="stat-box">
                <div class="stat-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">4,280</div>
                    <div class="stat-label">إجمالي الطلاب</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="stat-box">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,910</div>
                    <div class="stat-label">منتظم</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="stat-box">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">245</div>
                    <div class="stat-label">تحت المراجعة</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="stat-box">
                <div class="stat-icon">
                    <i class="fas fa-pause-circle"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">125</div>
                    <div class="stat-label">موقوف أكاديمياً</div>
                </div>
            </div>
        </div>
    </div>
    
    <x-flash-message />
    <div class="card table-card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-list-alt ml-2"></i>
                قائمة الطلاب
            </h3>
            <div class="card-tools">

                <a href="{{ route('dashboard.students.create') }}" class="btn btn-primary btn-sm">

                    <i class="fas fa-plus ml-1"></i> إضافة طالب

                </a>
            </div>
        </div>
        <div class="card-body">
            <table id="studentsTable" class="table table-bordered table-striped table-hover table-navy" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>الرقم الجامعي</th>
                        <th>اسم الطالب</th>
                        <th>الكلية</th>
                        <th>التخصص</th>
                        <th>الحالة</th>
                        <th>سنة القبول</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->student_number }}</td>
                            <td><strong> {{ $item->name }} </strong></td>
                            <td>كلية الحاسب</td>
                            <td>علوم الحاسب</td>
                            <td><span class="badge badge-success">منتظم</span></td>
                            <td>2024</td>
                            <td class="actions-cell">
                                <div class="table-actions">
                                    <a class="btn btn-primary btn-action" href="{{ route('dashboard.students.show', $item->id) }}" title="عرض">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning btn-action" href="{{ route('dashboard.students.edit', $item->id) }}" title="تعديل">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('dashboard.students.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-action" title="حذف"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection







@push('styles')
    <style>
        .actions-cell {
            white-space: nowrap;
            width: 1%;
            text-align: center;
        }

        .table-actions {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .table-actions form {
            display: inline-flex;
            margin: 0;
        }

        .table-actions .btn-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
    </style>
@endpush
@push('scripts')
    <script>

    </script>
@endpush