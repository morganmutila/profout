<x-app-layout title="Contact Us">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    @endpush

    <main class="main">

        <x-page-title title="Contact US">
            Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda
            numquam molestias.
        </x-page-title>

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-main-wrapper">
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="contact-content">
                        <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Location</h4>
                                    <p>8721 Broadway Avenue, New York, NY 10023</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Email</h4>
                                    <p>info@examplecompany.com</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Call</h4>
                                    <p>+1 (212) 555-7890</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Open Hours</h4>
                                    <p>Monday-Friday: 9AM - 6PM</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
                            <h3>Get in Touch</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua consectetur adipiscing.</p>

                            <form action="forms/contact.php" method="post" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required="">
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required="">
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <div class="form-submit">
                                    <button type="submit">Send Message</button>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->

    </main>


    @push('scripts')
        <script src="{{ asset('assets/js/header.js') }}"></script>
    @endpush

</x-app-layout>
