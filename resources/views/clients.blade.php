<x-app-layout title="Clients">

    <main class="main">

        <x-page-title title="Our Clients" link-name="Clients">
            A Snapshot Sample of Our Clients
        </x-page-title>

        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="clients-slider">
                    <div class="clients-track track-1" data-aos="fade-right" data-aos-delay="200">
                        @foreach ($clients as $client)
                            <div class="clients-slide">
                                <img src="{{ asset('storage/' . $client->logo) }}" class="img-fluid"
                                    alt="{{ $client->name }}">
                            </div>
                        @endforeach
                        <!-- Duplicate for seamless looping -->
                        @foreach ($clients as $client)
                            <div class="clients-slide">
                                <img src="{{ asset('storage/' . $client->logo) }}" class="img-fluid"
                                    alt="{{ $client->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="clients-slider">
                    <div class="clients-track track-2" data-aos="fade-left" data-aos-delay="300">
                        @foreach ($clients->reverse() as $client)
                            <div class="clients-slide">
                                <img src="{{ asset('storage/' . $client->logo) }}" class="img-fluid"
                                    alt="{{ $client->name }}">
                            </div>
                        @endforeach
                        <!-- Duplicate for seamless looping -->
                        @foreach ($clients->reverse() as $client)
                            <div class="clients-slide">
                                <img src="{{ asset('storage/' . $client->logo) }}" class="img-fluid"
                                    alt="{{ $client->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </section><!-- /Clients Section -->

    </main>

</x-app-layout>
