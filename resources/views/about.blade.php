<x-app-layout title="About">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    @endpush

    <main class="main">

        <x-page-title title="About">
            Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda
            numquam molestias.
        </x-page-title>

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">

                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                        <div class="content">
                            <h2 class="section-heading mb-4">Built on Excellence, Driven by Vision</h2>
                            <p class="lead-text mb-4">Professional Outcomes Ltd is a company specialized in Information
                                and Communication Technology Infrastructure building and Equipment supply. The company
                                was registered as vendor independent specializing in innovation, network design,
                                building and support. We focus so much on the customer as evidenced by our organization
                                structure. We take time to understand our customers and their needs. We then plan
                                together with our customers to realize their dreams in realistic network innovations.
                            </p>
                            <p class="description-text mb-5">Professional Outcomes have done works based on the
                                structured cable systems on which all our customers have built their networks. We are
                                able to design, build and support Network Systems providing equipment that complies
                                totally with all the 7 layers of the OSI model. We have links with leading technology
                                companies in the Far East, USA and the European Union who provide us with the latest
                                Information Technology products and updates.</p>
                            <p class="description-text mb-5">The Principal Engineer doubles as CEO and Managing Director
                                of the company. He is supported by three heads of departments in moving the company
                                towards a total customer delight. With this model, we have managed to motivate and
                                delight our customers</p>
                            <div class="stats-grid">
                                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                                    <div class="stat-number">25+</div>
                                    <div class="stat-label">Years Experience</div>
                                </div>
                                <div class="stat-item" data-aos="fade-up" data-aos-delay="350">
                                    <div class="stat-number">500+</div>
                                    <div class="stat-label">Projects Completed</div>
                                </div>
                                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                                    <div class="stat-number">98%</div>
                                    <div class="stat-label">Client Satisfaction</div>
                                </div>
                            </div>

                            <div class="cta-section" data-aos="fade-up" data-aos-delay="450">
                                <a href="#services" class="cta-link">
                                    Explore Our Services
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="200">
                        <div class="image-section">
                            <div class="main-image">
                                <img src="assets/img/construction/project-4.webp" alt="Construction project showcase"
                                    class="img-fluid">
                            </div>
                            <div class="floating-badge" data-aos="zoom-in" data-aos-delay="500">
                                <div class="badge-content">
                                    <i class="bi bi-award"></i>
                                    <div class="badge-text">
                                        <span class="badge-title">Quality Certified</span>
                                        <span class="badge-subtitle">Since 1999</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

    </main>


    @push('scripts')
        <script src="{{ asset('assets/js/header.js') }}"></script>
    @endpush

</x-app-layout>
