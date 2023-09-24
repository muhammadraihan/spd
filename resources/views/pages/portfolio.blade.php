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
                    @forelse ($brand as $item)
                        <div class="carousel-item active" style="background-image: url('{{ asset('photo/' . $item->photo) }}');">
                            <div class="carousel-container">
                                <div class="carousel-content animate__animated animate__fadeInUp">
                                    <div class="text-center"><a href="{{ route('portfolio-details', $item->uuid) }}" class="btn-get-started">See Project</a></div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            Empty
                        </div>
                    @endforelse

                    {{-- <!-- Slide 1 -->
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
                    </div> --}}

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
                            @foreach ($kategori as $item)
                                <li data-filter=".{{ str_replace(' ', '-', $item->nama) }}">{{ $item->nama }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    @foreach ($brand as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ str_replace(' ', '-', $item->kategori->nama) }}">
                        <img src="{{ asset('photo/' . $item->photo) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $item->nama }}</h4>
                            <p>{{ $item->kategori->nama }}</p>
                            <a href="{{ asset('photo/' . $item->photo) }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="{{ $item->nama }}"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('portfolio-details', $item->uuid) }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection
