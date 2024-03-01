<div class="card shadow border-0">
    @if ($cardHeader != null)
        <div class="card-header bg-dark text-white">{{ $cardHeader }}</div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>
</div>
