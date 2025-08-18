<x-app-layout title="Certifications">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    @endpush

    <main class="main">

        <x-page-title title="Certifications">
            Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat numquam molestias.
        </x-page-title>

        <!-- Projects Section -->
        <section id="projects" class="projects section">

            <div class="container">

                <div class="isotope-layout" data-layout="masonry" data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        @foreach ($certifications as $certificate)
                            <div class="col-lg-2 col-md-3 portfolio-item isotope-item filter-construction">
                                <div class="portfolio-content h-100 border">
                                    <img src="{{ asset('storage/' . $certificate->certificate_file) }}"
                                        class="img-fluid" alt="{{ $certificate->name }}"
                                        style="height: 240px;object-fit:contain">
                                    <div class="portfolio-info justify-items-center align-items-center">
                                        <p>{{ $certificate->name }}</p>
                                        <a href="{{ asset('storage/' . $certificate->certificate_file) }}"
                                            data-gallery="portfolio-gallery-product" class="glightbox preview-link">
                                            <i class="bi bi-zoom-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Projects Section -->

    </main>


    @push('scripts')
        <script src="{{ asset('assets/js/header.js') }}"></script>
    @endpush

</x-app-layout>
