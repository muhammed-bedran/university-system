@props([
    'lable'=>'',
    'name' =>'',
    'options'=> [],
    'selected' => null,
])
<label>{{ $lable }}</label>
<select name="{{ $name }}" class="form-control @error($name) is-invalid @enderror">
@foreach ($options as $value => $text )

    <option value="{{ $value }}"
    @if($value == old($name, $selected))
        selected
    @endif
     >
    {{ $text }}
   </option>
    
@endforeach
</select>

@error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror