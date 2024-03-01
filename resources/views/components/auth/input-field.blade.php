<div class='required field mt-3'>
    @if ($label != null)
        <label for="{{ $id }}" class="form-label fs  fw-semibold">{{ $label }}</label>
    @endif
    <input type='{{ $type }}'
        class='form-control form-control-sm {{ $extraclasses }} @error($name)
    is-invalid
    @enderror'
        id='{{ $id }}' name='{{ $name }}' placeholder='{{ $place }}' {{ $extraAttributes }}
        {{ $required == null ? '' : 'required' }} value='{{ $val == '' ? old($name) : $val }}'>

    @if ($errors->has($name))
        <span for="{{ $id }}" class="text-danger">{{ $errors->first($name) }}</span>
    @endif
</div>
