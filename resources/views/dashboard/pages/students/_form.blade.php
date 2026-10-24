<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{-- <label for="name">اسم الطالب</label>
            <input type="text" class="
            form-control 
            @error('name')
                is-invalid
            @enderror
            " name="name" id="name" value="{{ $student->name }}">
             @if ($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif 
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror --}}
            <x-form.input id="name" name="name" type="text" label="ادخل اسم الطالب" :value="$student->name"/>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
         <x-form.input id="student_number" name="student_number" type="text" label="ادخل رقم الطالب" :value="$student->student_number" />

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

        <x-form.input id="email" name="email"  label="ادخل البريد الالكتروني" :value="$student->email" />
                    
        </div>

    </div>

</div>