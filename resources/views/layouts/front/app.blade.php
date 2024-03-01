@include('layouts.guest.links')
@include('layouts.guest.navbar')

<div id='body' class='container mt-5'>
    {{ $slot }}
</div>

@include('layouts.guest.footer')
