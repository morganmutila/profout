<x-app-layout title="Terms of service">

    <main id="main">

        <x-section>

            <x-section-header>
                Terms of use
            </x-section-header>

            <x-slot name="row" class="row-cols-1 row-cols-md-2 mb-5 g-5">


                <div class="col-md-4 d-none d-md-block">
                    <nav class="nav nav-underline flex-column text-secondary">
                        <a class="nav-link" href="#sp-item-1">1. Website Content and Information</a>
                        <a class="nav-link" href="#sp-item-2">2. Contact Information</a>
                        <a class="nav-link" href="#sp-item-3">3. Request a Quote</a>
                        <a class="nav-link" href="#sp-item-4">4. Intellectual Property</a>
                        <a class="nav-link" href="#sp-item-5">5. Privacy Policy</a>
                        <a class="nav-link" href="#sp-item-6">6. External Links</a>
                        <a class="nav-link" href="#sp-item-7">7. Disclaimer of Liability</a>
                        <a class="nav-link" href="#sp-item-8">8. Modifications</a>
                    </nav>
                </div>

                <div class="col-md-8">
                    <div id="sp-item-1">
                        <h3>1. Website Content and Information</h3>
                        <p>The content provided on this website is for general informational purposes only. While we
                            strive to ensure the accuracy and relevance of the information, we make no representations
                            or warranties of any kind, express or implied, about the completeness, accuracy,
                            reliability, suitability, or availability of the website's content. The use of any
                            information or materials from this website is at your own risk.</p>
                    </div>

                    <div id="sp-item-2">
                        <h3>2. Contact Information</h3>
                        <p>We value open communication with our clients. You may contact us using the following</p>
                        <ol>
                            <li>Email: info@galactussafety.com</li>
                            <li>Phone: +26-0972532611</li>
                        </ol>

                    </div>

                    <div id="sp-item-3">
                        <h3>3. Request a Quote</h3>
                        <p>To request a quote for our Health, Safety, and Environment (HSE) services, please use the
                            contact information provided above. Our team will respond promptly to your inquiry and
                            provide the necessary details related to our services and pricing.</p>
                    </div>

                    <div id="sp-item-4">
                        <h3>4. Intellectual Property</h3>
                        <p>All materials, content, and intellectual property displayed on this website, including but
                            not limited to logos, graphics, images, text, and designs, are the property of Galactus
                            Safety and are protected by applicable copyright and trademark laws. You may not reproduce,
                            distribute, or use any materials from this website without our explicit written permission.
                        </p>
                    </div>

                    <div id="sp-item-5">
                        <h3>Privacy Policy</h3>
                        <p>Please review our <a href="{{ route('legal.privacy') }}">Privacy Policy</a> to understand how
                            we collect, use, and protect your personal information when using our website.</p>
                    </div>

                    <div id="sp-item-6">
                        <h3>6. External Links</h3>
                        <p>Our website may contain links to external websites for your convenience and reference. These
                            links do not signify our endorsement or affiliation with the linked website. We do not have
                            control over the content, nature, or availability of external sites, and we are not
                            responsible for their practices or policies.</p>
                    </div>

                    <div id="sp-item-7">
                        <h3>7. Disclaimer of Liability</h3>
                        <p>Galactus Safety, its employees, or representatives shall not be liable for any direct,
                            indirect, incidental, consequential, or punitive damages arising from the use of this
                            website, contact methods, or any external links. We are not responsible for any loss or
                            damage caused by viruses or other harmful components that may affect your computer or data
                            when using this website.</p>
                    </div>

                    <div id="sp-item-8">
                        <h3>8. Modifications</h3>
                        <p>Galactus Safety reserves the right to update or modify these Terms of Use at any time without
                            prior notice. Changes will be effective upon posting on this page. Please check this page
                            periodically to stay informed about any updates.</p>
                        <p>By using this website, you acknowledge that you have read and understood these Terms of Use
                            and agree to abide by them. If you have any questions or concerns, please contact us using
                            the provided contact information. Thank you for choosing Galactus Safety!</p>
                    </div>

                </div>

            </x-slot>


        </x-section>

    </main>

</x-app-layout>
