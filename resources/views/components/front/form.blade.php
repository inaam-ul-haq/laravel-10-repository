<form class="ui form {{ $extraClass }}" id="{{ $formId }}" action="{{ $formAction }}" method="post"
    @if ($enctype) enctype="multipart/form-data" @endif>
    @csrf

    {{ $slot }}
</form>
