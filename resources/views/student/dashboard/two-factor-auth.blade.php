@extends('layouts.student.index')
@section('title', 'التحقق بخطوتين')
@section('breadcrumb')
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> التحقق بخطوتين </a>
    </li>
@endsection
@section('content')


    <x-flash-message />
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">التحقق بخطوتين</h3>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (!$user->two_factor_secret)
                        <p>لم يتم تفعيل التحقق بخطوتين</p>
                        <form action="{{ route('two-factor.enable') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">تفعيل التحقق بخطوتين</button>
                        </form>
                    @else
                        <p>تم تفعيل التحقق بخطوتين</p>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    {!! $user->twoFactorQrCodeSvg() !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>رمز الاسترداد</p>
                                <ul class="list-group">
                                    @foreach ($user->recoveryCodes() as $code)
                                        <li class="list-group-item">{{ $code }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <form action="{{ route('two-factor.disable') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-3">تعطيل التحقق بخطوتين</button>
                        </form>
                    @endif
                </div>

            </div>
        </div>

    </div>

@endsection







@push('styles')

@endpush
@push('scripts')
    <script>

    </script>
@endpush