<header id="header" class="header d-flex align-items-center fixed-top {{ !request()->routeIs('home') ? 'page' : '' }}">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logos/logo-light-alt.png') }}" alt="Profout." class="logo-light">
            <img src="{{ asset('assets/img/logos/logo-dark-alt.png') }}" alt="Profout." class="logo-dark">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <!-- Megamenu 2 -->
                <li class="megamenu-2">
                    <a href="{{ route('services.index') }}"
                        class="{{ request()->routeIs('services.*') ? 'active' : '' }}"><span>Services</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>

                    <!-- Mobile Megamenu -->
                    <ul class="mobile-megamenu">
                        @foreach ($navbarServices as $service)
                            <li><a href="{{ route('services.' . $service->slug) }}">{{ $service->title }}</a></li>
                        @endforeach

                        @foreach ($serviceCategories ?? [] as $category)
                            <li class="dropdown">
                                <a href="#"><span>{{ $category->name }}</span> <i
                                        class="bi bi-caret-down-fill toggle-dropdown"></i></a>
                                <ul>
                                    @foreach ($category->services as $service)
                                        <li><a
                                                href="{{ route('services.' . $service->slug) }}">{{ $service->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul><!-- End Mobile Megamenu -->

                    <!-- Desktop Megamenu -->
                    <div class="desktop-megamenu">
                        <div class="tab-navigation">
                            <ul class="nav nav-tabs flex-column" id="megamenu-tabs" role="tablist">
                                @foreach ($navbarServices as $index => $service)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{ $index === 0 ? 'active' : '' }}"
                                            id="tab-{{ $service->id }}-tab" data-bs-toggle="tab"
                                            data-bs-target="#tab-{{ $service->id }}" type="button" role="tab"
                                            aria-controls="tab-{{ $service->id }}"
                                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                            {!! $service->icon !!}
                                            <span class="capitalized">{{ $service->title }}</span>
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="tab-content">
                            @foreach ($navbarServices as $index => $service)
                                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                    id="tab-{{ $service->id }}" role="tabpanel"
                                    aria-labelledby="tab-{{ $service->id }}-tab">
                                    <div class="content-grid">
                                        @foreach ($service->sections ?? [] as $section)
                                            <div class="product-section">
                                                <h4>{{ $section->title }}</h4>
                                                <div class="product-list">
                                                    @foreach ($section->items as $item)
                                                        <a href="{{ $item->url }}" class="product-link">
                                                            <i class="bi {{ $item->icon }}"></i>
                                                            <div>
                                                                <span>{{ $item->title }}</span>
                                                                <small>{{ $item->description }}</small>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach

                                        @if (!count($service->sections ?? []))
                                            <div class="product-section">
                                                <h4>{{ $service->title }} Services</h4>
                                                <div class="product-list">
                                                    <a href="{{ route('services.' . $service->slug) }}"
                                                        class="product-link">
                                                        <div>
                                                            <span>{{ $service->title }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div><!-- End Desktop Megamenu -->
                </li><!-- End Megamenu 2 -->

                <li><a href="{{ route('projects') }}"
                        class="{{ request()->routeIs('projects') || request()->routeIs('projects.show') ? 'active' : '' }}">Projects</a>
                </li>

                <li><a href="{{ route('clients') }}"
                        class="{{ request()->routeIs('clients') ? 'active' : '' }}">Clients</a></li>

                <li class="dropdown"><a
                        class="{{ request()->routeIs(['about', 'contact', 'certifications']) ? 'active' : '' }}"><span>Company</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        @foreach ($companyPages ?? [] as $page)
                            <li><a href="{{ route($page->route) }}"
                                    class="{{ request()->routeIs($page->route) ? 'active' : '' }}">{{ $page->title }}</a>
                            </li>
                        @endforeach

                        @if (empty($companyPages))
                            <li><a href="{{ route('about') }}"
                                    class="{{ request()->routeIs('about') ? 'active' : '' }}">About Profout</a></li>
                            <li><a href="{{ route('certifications') }}"
                                    class="{{ request()->routeIs('certifications') ? 'active' : '' }}">Certifications</a>
                            </li>
                            <li><a href="{{ route('contact') }}"
                                    class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
