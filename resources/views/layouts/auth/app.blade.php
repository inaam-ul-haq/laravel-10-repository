@include('layouts.auth.links')

@include('layouts.auth.header')
@include('layouts.auth.sidebar')

<main class="main-wrapper">
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{ $pageTitle }}</div>
            <div class="ms-auto">
                {{ $sideButton ?? '' }}
            </div>
        </div>
        <!--end breadcrumb-->

        <!-- Show Validation Errors -->
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <!-- Show Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Show Error Message -->
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{ $slot }}
    </div>
</main>
@include('layouts.auth.footer')
@include('layouts.auth.scripts')
