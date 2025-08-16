<x-app-layout title=" - Why Profout">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    @endpush

    <main class="main">


        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 hero-content" data-aos="fade-up" data-aos-delay="100">

                        <h1 class="title">
                            INSPIRE <span class="highlight">THROUGH</span> DESIGN
                        </h1>

                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae fermentum risus.
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                                Proin egestas, urna at rhoncus gravida.</p>
                        </div>

                        <div class="hero-buttons">
                            <a href="#services" class="primary-btn">
                                Our Services
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#portfolio" class="secondary-btn">
                                View Portfolio
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 hero-visual" data-aos="fade-up" data-aos-delay="200">
                        <div class="image-wrapper">
                            <img src="assets/img/misc/misc-square-16.webp" alt="Creative Design" class="main-image">

                            <div class="floating-element top-left">
                                <i class="bi bi-star-fill"></i>
                            </div>

                            <div class="floating-element bottom-right">
                                <i class="bi bi-circle-fill"></i>
                            </div>

                            <div class="experience-badge">
                                <span class="years">10+</span>
                                <span class="text">Years of Experience</span>
                            </div>
                        </div>

                        <div class="client-counter">
                            <div class="counter-number">
                                <span>750+</span>
                            </div>
                            <div class="counter-text">
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <h1>Why Profout?</h1>
        <p>This is the Why Profout? page.</p>

    </main>


    @push('scripts')
        <script src="{{ asset('assets/js/header.js') }}"></script>
    @endpush

</x-app-layout>
