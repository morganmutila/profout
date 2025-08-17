<x-app-layout title="Certifications">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    @endpush

    <main class="main">

        <x-page-title title="Certifications">
            Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda
            numquam molestias.
        </x-page-title>

        <!-- Projects Section -->
        <section id="projects" class="projects section">

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        @foreach ($certifications as $certificate)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('storage/' . $certificate->certificate_file) }}"
                                        class="img-fluid" alt="{{ $certificate->name }}">
                                    <div class="portfolio-info">
                                        <h4>{{ $certificate->name }}</h4>
                                        <p>{{ $certificate->description }}</p>
                                        <a href="assets/img/projects/construction-1.jpg" title="Product 1"
                                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="project-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach

                    </div><!-- End Portfolio Container -->
                    @foreach ($certifications as $certificate)
                        <div class="col-lg-4 col-md-6">
                            <div class="certification-card">
                                <img src="{{ asset('storage/' . $certificate->certificate_file) }}" class="img-fluid"
                                    alt="{{ $certificate->name }}">
                                <h3>{{ $certificate->name }}</h3>
                                <p>{{ $certificate->description }}</p>
                                <a href="{{ route('certifications', $certificate->id) }}" class="btn btn-primary">View
                                    Details</a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </section><!-- /Projects Section -->

    </main>


    @push('scripts')
        <script src="{{ asset('assets/js/header.js') }}"></script>
    @endpush

</x-app-layout>
