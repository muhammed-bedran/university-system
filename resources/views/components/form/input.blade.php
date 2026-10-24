@props([
    'id',
    'name',
    'type'=>'text',
    'label' =>'',
    'value'=>'',
])

<label for="{{ $id }}"> {{ $label }}</label>
<input type="{{ $type }}" class="
    form-control 
    @error($name)
        is-invalid
    @enderror
    " 
    name="{{ $name }}" 
    id="{{ $id }}" 
    value="{{old($name, $value)}}">
    @error($name)
    <p class="text-danger">{{ $message }}</p>
    @enderror