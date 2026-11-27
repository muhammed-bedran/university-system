<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        
            <x-form.input id="name" name="name" type="text" label="ادخل اسم الكلية" :value="$faculty->name"/>

                <x-multira-translations group="faculties" field="name" :model="$faculty" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
         <x-form.input id="code" name="code" type="text" label="ادخل رمز الكلية" :value="$faculty->code" />

        </div>
    </div>


</div>