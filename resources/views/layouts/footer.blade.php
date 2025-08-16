<footer id="footer" class="footer dark-background">

    <div class="container">
        <div class="row gy-5">

            <div class="col-lg-5">
                <div class="footer-brand">
                    <a href="index.html" class="logo d-flex align-items-center mb-3">
                        <img src="{{ asset('assets/img/logos/logo-light-full.png') }}" alt="Profout."
                            class="logo-light w-100">
                    </a>
                    <p class="tagline text-start">Professional Outcomes Ltd is a company specialized in Information and
                        Communication Technology Infrastructure building and Equipment supply.</p>
                    <p class="fs-4 lh-lg text-start text-accent my-4">Ready to talk? contact us at any time.<br>+26
                        0972532611</p>

                    <div class="social-links mt-4">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 offset-md-1">
                <div class="footer-links-grid">
                    <div class="row">

                        <div class="col-6 col-md-4">
                            <h5>Services</h5>
                            <ul class="list-unstyled w-100">
                                <li><a href="{{ route('services.communication') }}">Communication</a></li>
                                <li><a href="{{ route('services.energy') }}">Energy</a></li>
                                <li><a href="{{ route('services.security') }}">Security Solutions</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4">
                            <h5>Support</h5>
                            <ul class="list-unstyled w-100">
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('legal.privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('legal.terms') }}">Terms of Service</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-md-4">
                            <h5>Company</h5>
                            <ul class="list-unstyled w-100">
                                <li><a href="{{ route('about') }}">About Profout</a></li>
                                <li><a href="{{ route('team') }}">Our Team</a></li>
                                <li><a href="{{ route('why-profout') }}">Why Profout?</a></li>
                                <li><a href="{{ route('certifications') }}">Certifications</a></li>
                                <li><a href="{{ route('clients') }}">Our Clients</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('careers') }}">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom-content">
                        <p>©&nbsp;{{ date('Y') }}&nbsp;Copyright Professional Outcomes
                            Limited <span>. All Rights
                                Reserved</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
