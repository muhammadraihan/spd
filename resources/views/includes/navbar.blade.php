<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <a href="{{ route('home') }}" class="logo me-auto"><img src="assets/img/logo/logo-biru.png" alt=""
                class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0" aria-label="navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="text-underline {{ request()->is('/home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="text-underline {{ request()->is('/about') ? 'active' : '' }}">Who Are We</a>
                </li>
                <li><a href="{{ route('services') }}"
                        class="text-underline {{ request()->is('/services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('portfolio') }}" class="text-underline {{ request()->is('/portfolio') ? 'active' : '' }}">Our
                        Works</a></li>
                <li><a href="{{ route('contact') }}"
                        class="text-underline {{ request()->is('/contact') ? 'active' : '' }}">Contact</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex">
            <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        </div>

    </div>

    {{-- <div class="container d-flex align-items-center">
        <a href="index.html" class="logo me-auto"><img src="assets/img/logo/logo-biru.png" alt=""
                class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0" aria-label="navbar">
            <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="about.html">Who Are We</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Our Works</a></li>
                <li><a href="contact.html">Contact</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex">
            <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        </div>

    </div> --}}
</header>
<!-- End Header -->
