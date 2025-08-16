<!-- Include the header CSS file in your head section -->
@push('styles')
    <link href="{{ asset('assets/css/header.css') }}" rel="stylesheet">
@endpush

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logos/logo-light-alt.png') }}" alt="Profout." class="logo-light">
            <img src="{{ asset('assets/img/logos/logo-dark-alt.png') }}" alt="Profout." class="logo-dark">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li class="dropdown"><a href="#"><span>Company</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('about') }}">About Profout</a></li>
                        <li><a href="{{ route('why-profout') }}">Why Profout?</a></li>
                        <li><a href="{{ route('certifications') }}">Certifications</a></li>
                        <li><a href="{{ route('team') }}">Our Team</a></li>
                        <li><a href="{{ route('clients') }}">Our Clients</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

<!-- Include the header JavaScript file before closing body tag -->
@push('scripts')
    <script src="{{ asset('assets/js/header.js') }}"></script>
@endpush
