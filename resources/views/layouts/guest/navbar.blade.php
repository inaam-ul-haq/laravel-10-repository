<nav class="navbar navbar-expand-lg sticky-top bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-md">
        <a class="navbar-brand" href="{{ route('front.welcome') }}">{{ config('app.name') }}</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.about') }}">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.contact') }}">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.terms') }}">terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.privacy') }}">privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.return_policy') }}">return policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.help') }}">help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.register') }}">Register</a>
                </li>
            </ul>
        </div>
</nav>
