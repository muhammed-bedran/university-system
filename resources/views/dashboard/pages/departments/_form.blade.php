<div class="row">
    <div class="col-md-6">
        <div class="form-group">
 
            <x-form.input id="name" name="name" type="text" label="ادخل اسم القسم" :value="$department->name"/>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
         <x-form.input id="code" name="code" type="text" label="ادخل رمز القسم" :value="$department->code" />

        </div>
    </div>
    <div class="col-md-6 mb-3">
     
            <x-form.select
            id="faculty_id"
            name="faculty_id"
            label="اختر الكلية"
            :options="$faculties"
            :selected="$department->faculty_id ?? ''"
            />
    </div>

</div>