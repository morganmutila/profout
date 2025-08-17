<x-app-layout title="Services">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    @endpush

    <main class="main">

        <x-page-title title="Services">
            Communications | Energy | Security Solutions
        </x-page-title>

        <div class="container py-5">

    </main>


    @push('scripts')
        <script src="{{ asset('assets/js/header.js') }}"></script>
    @endpush

</x-app-layout>
<div class="row">
    <div class="col-lg-12">
        <h1>Our Services</h1>
        <p class="lead">Professional Outcomes Limited offers a comprehensive range of services to meet your
            business needs.</p>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-4">
        <div class="service-card">
            <h3>Communication</h3>
            <p>Transform your business communication with our cutting-edge solutions including VoIP, network
                infrastructure, and unified communications.</p>
            <a href="{{ route('services.communication') }}" class="btn btn-primary">Learn More</a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="service-card">
            <h3>Energy</h3>
            <p>Sustainable and efficient energy solutions including solar power systems, energy management, and
                power backup solutions.</p>
            <a href="{{ route('services.energy') }}" class="btn btn-primary">Learn More</a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="service-card">
            <h3>Security Solutions</h3>
            <p>Comprehensive security solutions including access control, video surveillance, and cybersecurity
                services.</p>
            <a href="{{ route('services.security') }}" class="btn btn-primary">Learn More</a>
        </div>
    </div>
</div>
</div>
