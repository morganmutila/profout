<x-app-layout title="Our Projects">

    <main class="main">
        @push('styles')
            <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
        @endpush


        <x-page-title title="Our Projects" link-name="Projects">
            Discover our innovative solutions and successful implementations across various
            sectors.
        </x-page-title>

        <!-- Projects Section -->
        <section id="projects" class="projects-main section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="assets/img/construction/project-3.webp" alt="Project" class="img-fluid">
                                <div class="project-overlay">
                                    <div class="project-status completed">Completed</div>
                                    <div class="project-actions">
                                        <a href="project-details.html" class="btn-project">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-category">Commercial</div>
                                <h4 class="project-title">Downtown Business Center</h4>
                                <p class="project-description">Modern office complex featuring sustainable design
                                    elements and advanced building systems.</p>
                                <div class="project-meta">
                                    <span class="location"><i class="bi bi-geo-alt"></i> Chicago, IL</span>
                                    <span class="timeline"><i class="bi bi-calendar"></i> 18 Months</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Project Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="assets/img/construction/project-7.webp" alt="Project" class="img-fluid">
                                <div class="project-overlay">
                                    <div class="project-status in-progress">In Progress</div>
                                    <div class="project-actions">
                                        <a href="project-details.html" class="btn-project">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-category">Residential</div>
                                <h4 class="project-title">Luxury Waterfront Villa</h4>
                                <p class="project-description">Exclusive residential property with panoramic views and
                                    premium finishes throughout.</p>
                                <div class="project-meta">
                                    <span class="location"><i class="bi bi-geo-alt"></i> Miami, FL</span>
                                    <span class="timeline"><i class="bi bi-calendar"></i> 12 Months</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Project Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="assets/img/construction/project-11.webp" alt="Project" class="img-fluid">
                                <div class="project-overlay">
                                    <div class="project-status completed">Completed</div>
                                    <div class="project-actions">
                                        <a href="project-details.html" class="btn-project">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-category">Industrial</div>
                                <h4 class="project-title">Manufacturing Warehouse</h4>
                                <p class="project-description">Large-scale industrial facility with automated systems
                                    and efficient workflow design.</p>
                                <div class="project-meta">
                                    <span class="location"><i class="bi bi-geo-alt"></i> Detroit, MI</span>
                                    <span class="timeline"><i class="bi bi-calendar"></i> 24 Months</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Project Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="assets/img/construction/project-1.webp" alt="Project" class="img-fluid">
                                <div class="project-overlay">
                                    <div class="project-status completed">Completed</div>
                                    <div class="project-actions">
                                        <a href="project-details.html" class="btn-project">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-category">Healthcare</div>
                                <h4 class="project-title">Regional Medical Center</h4>
                                <p class="project-description">State-of-the-art healthcare facility with specialized
                                    treatment areas and patient amenities.</p>
                                <div class="project-meta">
                                    <span class="location"><i class="bi bi-geo-alt"></i> Phoenix, AZ</span>
                                    <span class="timeline"><i class="bi bi-calendar"></i> 30 Months</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Project Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="assets/img/construction/project-9.webp" alt="Project" class="img-fluid">
                                <div class="project-overlay">
                                    <div class="project-status planning">Planning</div>
                                    <div class="project-actions">
                                        <a href="project-details.html" class="btn-project">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-category">Educational</div>
                                <h4 class="project-title">University Science Building</h4>
                                <p class="project-description">Modern research facility with advanced laboratories and
                                    collaborative learning spaces.</p>
                                <div class="project-meta">
                                    <span class="location"><i class="bi bi-geo-alt"></i> Austin, TX</span>
                                    <span class="timeline"><i class="bi bi-calendar"></i> 36 Months</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Project Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="assets/img/construction/project-5.webp" alt="Project" class="img-fluid">
                                <div class="project-overlay">
                                    <div class="project-status completed">Completed</div>
                                    <div class="project-actions">
                                        <a href="project-details.html" class="btn-project">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-category">Retail</div>
                                <h4 class="project-title">Shopping Complex</h4>
                                <p class="project-description">Multi-level retail center with dining areas and
                                    entertainment facilities for the community.</p>
                                <div class="project-meta">
                                    <span class="location"><i class="bi bi-geo-alt"></i> Seattle, WA</span>
                                    <span class="timeline"><i class="bi bi-calendar"></i> 20 Months</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Project Item -->

                </div>

            </div>

        </section><!-- /Projects Section -->

    </main>

    @push('scripts')
        <script src="{{ asset('assets/js/header.js') }}"></script>
    @endpush

</x-app-layout>
