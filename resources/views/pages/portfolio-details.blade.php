@extends('layouts.spd')

@section('title')
    Portfolio Detail
@endsection

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                        <li>Portfolio Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 mb-4">

                    <div class="col-lg-12">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                
                                <div class="swiper-slide">
                                    <img src="{{ asset('photo/' . $brand->photo) }}" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="portfolio-description text-center">
                            <h2>{{ $brand->judul }}</h2>
                            <p>
                                {!! $brand->deskripsi !!}
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    @foreach ($content as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('photo/' . $item->photo) }}" class="w-100" alt="">
                        <div class="portfolio-info">
                            {{-- <h4>{{ $item->nama }}</h4>
                            <p>{{ $item->kategori->nama }}</p>
                            <a href="{{ asset('photo/' . $item->photo) }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="{{ $item->nama }}"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('portfolio-details', $item->uuid) }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
