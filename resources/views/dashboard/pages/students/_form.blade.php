<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            
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
    <div class="col-md-6">
        <div class="form-group">
            <x-form.select 
            id="department_id" 
            name="department_id" 
            label="اختر القسم" 
            :options="$departments" 
            :selected="$student->department_id"/>
        </div>
    </div>
<div class="col-md-6">
    <div class="form-group">

        <x-form.input 
        id="password" 
        name="password" 
        type="password" 
        :label="$student->exists ? 'كلمة المرور اتركها فارغة ان لم ترد تغييرها': 'كلمة المرور'" 
        value="" 
        />
    </div>
    <div class="form-group">

        <x-form.input 
        id="password_confirmation" 
        name="password_confirmation" 
        type="password" 
        :label="$student->exists ? 'تاكيد كلمة المرور اتركها فارغة ان لم ترد تغييرها': 'تاكيد كلمة المرور'" 
        value="" 
        />
    </div>
</div>
    

</div>