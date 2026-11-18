<x-guest-layout>
<style>
    .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
    .btn-primary:hover {
        background-color: #0b5ed7;
        border-color: #0a58ca;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    .form-control {
        margin-bottom: 1rem;
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    input.form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .text {
        color: #f3f2f2 !important;
    }
</style>
    <div class="text">
        ادخل رمز التحقق المكون من 6 أرقام أو رمز الاسترداد لتسجيل الدخول.
    </div>
    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('two-factor.login') }}">
        @csrf
        <input class="form-control" type="text" name="code" placeholder="رمز التحقق" >
        <input class="form-control" type="text" name="recovery_code" placeholder="رمز الاسترداد" >
        <button type="submit" class="btn btn-primary mt-3">تسجيل الدخول</button>
    </form>


</x-guest-layout>