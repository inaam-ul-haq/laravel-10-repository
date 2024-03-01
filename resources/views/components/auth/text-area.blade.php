<div class='required field mt-3'>
    @if ($label != null)
        <label for="{{ $id }}" class="form-label fs  fw-semibold">{{ $label }}</label>
    @endif

    <textarea class="form-control {{ $extraclasses }} @error($name)
    is-invalid
    @enderror" id='{{ $id }}'
        name='{{ $name }}' placeholder='{{ $place }}' {{ $extraAttributes }}
        {{ $required == null ? '' : 'required' }} value='{{ $val == '' ? old($name) : $val }}' row="3">{{ $val == '' ? old($name) : $val }}</textarea>

    @if ($errors->has($name))
        <span for="{{ $id }}" class="text-danger">{{ $errors->first($name) }}</span>
    @endif
</div>
