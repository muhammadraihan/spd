@extends('layouts.spd')

@section('title')
    Our Works | SPD Communication
@endsection

@section('content')
    <main id="main">
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(assets/img/hero/slide-1.jpeg);">
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(assets/img/hero/slide-2.jpeg);">
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <div class="text-center"><a href="" class="btn-get-started">See Project</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(assets/img/hero/slide-3.jpeg);">
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <div class="text-center"><a href="" class="btn-get-started">See Project</a></div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            </div>
        </section>
        <!-- End Hero -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Social Media</li>
                            <li data-filter=".filter-card">TV Commercial</li>
                            <li data-filter=".filter-web">OOH</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Corkcicle</h4>
                            <p>Social Media</p>
                            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Corkcicle"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Teh Sariwangi</h4>
                            <p>OOH</p>
                            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Teh Sariwangi"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Kaktus Medan</h4>
                            <p>Social Media</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Kaktus Medan"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>RayBan</h4>
                            <p>TV Commercial</p>
                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="RayBan"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Braun</h4>
                            <p>OOH</p>
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Braun"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>IKEA</h4>
                            <p>Social Media</p>
                            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="IKEA"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Nikon</h4>
                            <p>TV Commercial</p>
                            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Nikon"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Jack Daniel's</h4>
                            <p>TV Commercial</p>
                            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Jack Daniel's"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Timex</h4>
                            <p>OOH</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Timex"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection
