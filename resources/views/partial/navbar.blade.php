<nav class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container-fluid px-5">
        <a class="navbar-brand me-5" href="{{ route('landingpage') }}"><img src="{{ asset('images/logo.png') }}"
                class="gambar-logo" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-lg-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('beranda') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('product') ? 'active' : '' }}"
                        href="{{ route('product') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang
                        Kami</a>
                </li>
            </ul>
            <div class="nav-login">
                @if (auth()->user())
                    <a href="{{ route('logout') }}" class="btn btn-outline-primary me-3">Logout</a>
                @else
                    <a href="{{ route('auth.login') }}" class="btn btn-outline-primary me-3">Masuk</a>
                    <a href="{{ route('auth.register') }}" class="btn btn-primary">Daftar</a>
                @endif
            </div>
        </div>
    </div>
</nav>
