@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

<div class='required field mt-3'>
    @if ($label != null)
        <label for="{{ $id }}" class="form-label fs  fw-semibold">{{ $label }}</label>
    @endif

    <select class="select_2 form-control @error($name)
    is-invalid
    @enderror" name="{{ $name }}"
        id="{{ $id }}">
        <option value="" selected disabled>Select {{ $label }}</option>
        @if ($loopData == null)
        @else
            @foreach ($loopData as $item)
                <option value="{{ $item->id }}" {{ $item->id == $existingId ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @endforeach
        @endif
    </select>

    @if ($errors->has($name))
        <span for="{{ $id }}" class="text-danger">{{ $errors->first($name) }}</span>
    @endif
</div>

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select_2').select2();
        });
    </script>
@endsection
