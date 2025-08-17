<x-app-layout title="Clients">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    @endpush

    <main class="main">

        <x-page-title title="Our Clients" link-name="Clients">
            A Snapshot Sample of Our Clients
        </x-page-title>

        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="clients-slider">
                    <div class="clients-track track-1" data-aos="fade-right" data-aos-delay="200">
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-1.webp" class="img-fluid" alt="Client 1">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-2.webp" class="img-fluid" alt="Client 2">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-3.webp" class="img-fluid" alt="Client 3">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-4.webp" class="img-fluid" alt="Client 4">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-5.webp" class="img-fluid" alt="Client 5">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-6.webp" class="img-fluid" alt="Client 6">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-7.webp" class="img-fluid" alt="Client 7">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-8.webp" class="img-fluid" alt="Client 8">
                        </div>

                        <!-- Duplicate for seamless looping -->
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-1.webp" class="img-fluid" alt="Client 1">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-2.webp" class="img-fluid" alt="Client 2">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-3.webp" class="img-fluid" alt="Client 3">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-4.webp" class="img-fluid" alt="Client 4">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-5.webp" class="img-fluid" alt="Client 5">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-6.webp" class="img-fluid" alt="Client 6">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-7.webp" class="img-fluid" alt="Client 7">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-8.webp" class="img-fluid" alt="Client 8">
                        </div>
                    </div>
                </div>

                <div class="clients-slider">
                    <div class="clients-track track-2" data-aos="fade-left" data-aos-delay="300">
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-8.webp" class="img-fluid" alt="Client 8">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-7.webp" class="img-fluid" alt="Client 7">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-6.webp" class="img-fluid" alt="Client 6">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-5.webp" class="img-fluid" alt="Client 5">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-4.webp" class="img-fluid" alt="Client 4">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-3.webp" class="img-fluid" alt="Client 3">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-2.webp" class="img-fluid" alt="Client 2">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-1.webp" class="img-fluid" alt="Client 1">
                        </div>

                        <!-- Duplicate for seamless looping -->
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-8.webp" class="img-fluid" alt="Client 8">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-7.webp" class="img-fluid" alt="Client 7">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-6.webp" class="img-fluid" alt="Client 6">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-5.webp" class="img-fluid" alt="Client 5">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-4.webp" class="img-fluid" alt="Client 4">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-3.webp" class="img-fluid" alt="Client 3">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-2.webp" class="img-fluid" alt="Client 2">
                        </div>
                        <div class="clients-slide">
                            <img src="assets/img/clients/clients-1.webp" class="img-fluid" alt="Client 1">
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Clients Section -->

    </main>


    @push('scripts')
        <script src="{{ asset('assets/js/header.js') }}"></script>
    @endpush

</x-app-layout>
