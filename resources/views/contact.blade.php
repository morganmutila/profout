<x-app-layout title="Contact Us">


    <main class="main">

        <x-page-title title="Contact Us">
            To contact us, please use the form or give us a call, send an email to contact Profout with the contact
            details that are listed below.
        </x-page-title>

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-main-wrapper">
                    <div class="map-wrapper">
                        {!! $settingsGlobal->map_location !!}
                    </div>

                    <div class="contact-content">
                        <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Location</h4>
                                    <p>{{ $settingsGlobal->address }}</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Email</h4>
                                    <p>{{ $settingsGlobal->email }}</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Call</h4>
                                    <p>{{ $settingsGlobal->phone }}</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Open Hours</h4>
                                    <p>Monday - Friday: 8HRS - 17HRS<br><span style="font-size:14px;">Excluding public
                                            Holidays</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
                            <h3>Get in Touch</h3>
                            <p>Send an email to contact Profout. Our dedicated team will reply to the email on any
                                enquiries on the products and services.</p>

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
                                <div class="form-submit">
                                    <button type="submit">Send Message</button>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-facebook"></i></a>
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

</x-app-layout>
