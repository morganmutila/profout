<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        @foreach ($sliders as $slider)
            <div class="carousel-item @if ($loop->first) active @endif">
                <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}">
                <div class="carousel-container">
                    <h2>{{ $slider->title }}</h2>
                    <p>{{ $slider->description }}</p>
                    <a href="#featured-services" class="btn-get-started">Get Started</a>
                </div>
            </div><!-- End Carousel Item -->
        @endforeach

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

    </div>

</section><!-- /Hero Section -->
