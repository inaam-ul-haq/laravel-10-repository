<div class='required field'>
    @if ($label != null)
        <label for="{{ $id }}" class="form-label fs  fw-semibold text-white">{{ $label }}</label>
    @endif
    <input type='{{ $type }}' class='{{ $extraclasses }}' id='{{ $id }}' name='{{ $name }}'
        placeholder='{{ $place }}' {{ $extraAttributes }} {{ $required == null ? '' : 'required' }}
        value='{{ $val == '' ? old($name) : $val }}'>

    @if ($errors->has($name))
        <span for="{{ $id }}" class="">{{ $errors->first($name) }}</span>
    @endif
</div>
