<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade"
    style="background-image: url(assets/img/construction/showcase-2.webp);">
    <div class="container position-relative">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">{{ isset($linkName) ? $linkName : $title }}</li>
            </ol>
        </nav>
        <h1>{{ $title }}</h1>
        <p>{{ $slot }}</p>
    </div>
</div><!-- End Page Title -->
